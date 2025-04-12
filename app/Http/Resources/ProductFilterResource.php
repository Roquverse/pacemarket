<?php

/**
 * @author tehcvillage <support@techvill.org>
 *
 * @contributor A.H. Millat <[millat.techvill@gmail.com]>
 * @contributor Sakawat Hossain <[sakawat.techvill@gmail.com]>
 *
 * @created 16-05-2022
 */

namespace App\Http\Resources;

use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMeta;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ProductFilterResource
{
    /**
     * resource
     *
     * @var mixed
     */
    protected $resource = [];

    /**
     * categories
     *
     * @var mixed
     */
    protected $categories;

    /**
     * brands
     *
     * @var mixed
     */
    protected $brands;

    /**
     * price_range
     *
     * @var array
     */
    protected $price_range = [0, 0];

    /**
     * attributes
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * product single collection
     *
     * @var mixed
     */
    protected $collection;

    /**
     * default of filterable, applied_filter, toArray
     *
     * @var array
     */
    protected $default = [
        'categories' => [],
        'brands' => [],
        'price_range' => [],
        'rating' => [],
        'attributes' => [],
        'keyword' => null,
        'sort_by' => null,
        'showing' => null,
        'b2b' => null,
    ];

    /**
     * query
     *
     * @var mixed
     */
    protected $query;

    /**
     * category path
     *
     * @var null
     */
    public $categoryPath = [];

    /**
     * attributeValues
     *
     * @var array
     */
    private $attributeValues = [];

    /**
     * productIds
     *
     * @var array
     */
    private $productIds = [];

    /**
     * __construct
     *
     * @param  mixed  $resource
     * @return void
     */
    public function __construct($resource)
    {
        $this->resource = $this->setResource($resource);

        $this->productIds = $this->resource->pluck('id')->toArray();

        $this->categories = $this->brands = new Collection();

        $this->attributeValues = AttributeValue::getAll()->pluck('value', 'id')->toArray();

        $this->iterateCollection();
    }

    /**
     * setResource
     *
     * @param  mixed  $resource
     * @return void
     */
    protected function setResource($resource)
    {
        if ($resource instanceof Builder) {

            $this->query = $resource;

            return $resource->get();
        }

        return $resource;
    }

    /**
     * iterateCollection
     *
     * @return void
     */
    protected function iterateCollection()
    {
        $this->filterAttributes();
        $this->filterBrands();
        $this->filterCategories();
        $this->filterPriceRange();
    }

    /**
     * get model collection
     *
     * @return void
     */
    public function getCollection()
    {
        return $this->resource;
    }

    /**
     * query
     *
     * @return object
     */
    public function query()
    {
        if (! isset($this->query)) {
            throw new Exception('Collection passed, query not found');
        }

        return $this->query;
    }

    /**
     * get all filterable
     *
     * @return void
     */
    public function getFilters()
    {
        $filterable = [
            'categories' => $this->categories->makeHidden(['pivot'])->pluck('name')->toArray(),
            'category_slug' => $this->categories->makeHidden(['pivot'])->pluck('slug')->toArray(),
            'brands' => $this->brands->pluck('name')->toArray(),
            'price_range' => $this->price_range,
            'rating' => 5,
            'attributes' => $this->attributes,
        ];

        // merge filterable with the default array
        return array_merge($this->default, $filterable);
    }

    /**
     * filterable categories from the resource
     *
     * @return void
     */
    protected function filterCategories()
    {
        $this->categories = Category::whereHas('productCategory', function ($query) {
            $query->whereIn('product_id', $this->productIds);
        })->get();
    }

    /**
     * filterable brands from the resource
     *
     * @return void
     */
    protected function filterBrands()
    {
        $this->brands = Brand::whereHas('product', function ($query) {
            $query->whereIn('id', $this->productIds);
        })->get();
    }

    protected function filterPriceRange()
    {
        // Step 1: Fetch all product IDs, including variations & grouped products
        $allProductIds = $this->getAllRelatedProductIds($this->productIds);

        // Step 2: Fetch only necessary product data (avoid fetching entire model)
        $products = \DB::table('products')
            ->whereIn('id', $allProductIds)
            ->select('id', 'regular_price', 'sale_price', 'sale_from', 'sale_to', 'available_from', 'available_to')
            ->get();
        $currentDate = Carbon::now();
        $prices = [];

        // Step 3: Process pricing logic in a single loop
        foreach ($products as $product) {
            $regularPrice = $product->regular_price;
            $salePrice = $product->sale_price;
            $saleFrom = $product->sale_from ? Carbon::parse($product->sale_from) : null;
            $saleTo = $product->sale_to ? Carbon::parse($product->sale_to) : null;
            $availableFrom = $product->available_from ? Carbon::parse($product->available_from) : null;
            $availableTo = $product->available_to ? Carbon::parse($product->available_to) : null;

            // Skip products outside the availability period
            if (($availableFrom && $currentDate < $availableFrom) || ($availableTo && $currentDate > $availableTo)) {
                continue;
            }

            // Use sale price if it's within the sale period and not zero
            $validPrice = null;
            if ($salePrice > 0 && (! $saleFrom || $currentDate >= $saleFrom) && (! $saleTo || $currentDate <= $saleTo)) {
                $validPrice = $salePrice;
            }

            // Fallback to regular price if sale price isn't valid
            if (! $validPrice && $regularPrice > 0) {
                $validPrice = $regularPrice;
            }

            if ($validPrice) {
                $prices[] = $validPrice;
            }
        }

        // Step 4: Store min/max price range (avoid returning zero)
        $this->price_range = [! empty($prices) ? min($prices) : null, ! empty($prices) ? max($prices) : null];
    }

    /**
     * Optimized method to get all related product IDs efficiently
     */
    protected function getAllRelatedProductIds(array $resourceIds)
    {
        $processedGroupIds = [];
        $allProductIds = $resourceIds;

        do {
            // Fetch products and variations in one query
            $query = \DB::table('products')
                ->whereIn('id', $allProductIds)
                ->orWhereIn('parent_id', $allProductIds)
                ->select('id', 'parent_id', 'type')
                ->get();

            $newProductIds = $query->pluck('id')->toArray();

            // Find grouped product IDs
            $groupProductIds = $query->where('type', 'Grouped Product')->pluck('id')->toArray();

            // Fetch grouped products from product_meta in a single query
            if (! empty($groupProductIds)) {
                $groupedProductIds = \DB::table('products_meta')
                    ->whereIn('product_id', $groupProductIds)
                    ->where('key', 'meta_grouped_products')
                    ->pluck('value')
                    ->toArray();

                // Convert comma-separated or JSON values into arrays
                $groupedProductIds = array_unique(array_merge([], ...array_map(fn ($v) => json_decode($v, true) ?: explode(',', $v), $groupedProductIds)));

                $allProductIds = array_diff(array_merge($newProductIds, $groupedProductIds), $processedGroupIds);
            } else {
                $allProductIds = array_diff($newProductIds, $processedGroupIds);
            }

            $processedGroupIds = array_merge($processedGroupIds, $allProductIds);
        } while (! empty($allProductIds));

        return $processedGroupIds;
    }

    /**
     * filterable attributes from the resource
     *
     * @return void
     */
    protected function filterAttributes()
    {
        $metaAttributes = ProductMeta::whereIn('product_id', $this->productIds)->where('key', 'attributes')->get();

        foreach ($metaAttributes as $attribute) {
            foreach ($attribute->value as $atr) {
                if ($atr['attribute_id']) {
                    $attributeValues = array_intersect_key($this->attributeValues, array_flip($atr['value']));
                } else {
                    $attributeValues = $atr['value'];
                }

                if (isset($this->attributes[$atr['name']])) {

                    $formatData = $this->attributes[$atr['name']];

                    foreach ($attributeValues as $key => $val) {
                        $formatData[$key] = $val;
                    }

                    $this->attributes[$atr['name']] = $formatData;
                } else {
                    $this->attributes[$atr['name']] = $attributeValues;
                }
            }
        }

        return $this->attributes;
    }

    /**
     * applied filters from request queries
     *
     * @return void
     */
    public function getAppliedFilters()
    {
        $appliedFilterQueries = [];

        foreach (request()->query() as $key => $value) {

            // skip loop if query param not filterable
            // only filterable params $this->default
            if (! array_key_exists($key, $this->default)) {
                continue;
            }

            if ($key == 'attributes') {
                $appliedFilterQueries['attributes'] = $this->appliedAttributeFormat($value);
            } elseif ($key == 'categories') {
                $appliedFilterQueries[$key] = explode(',', $value);
                $category = Category::getAll()->where('name', $value)->where('status', 'Active')->first();
                $parent = null;
                if (! empty($category)) {
                    $parent[] = ['name' => $category->name, 'slug' => $category->slug];
                }

                while (1) {
                    if (! empty($category) && ! empty($category->category)) {
                        $category = $category->category;
                        $parent[] = ['name' => $category->name, 'slug' => $category->slug];
                    } else {
                        break;
                    }
                }

                $this->categoryPath = $parent != null ? array_reverse($parent) : $parent;
            } else {
                $appliedFilterQueries[$key] = explode(',', xss_clean($value));
            }
        }

        return array_merge($this->default, $appliedFilterQueries);
    }

    /**
     * attributes from request query formatter
     *
     * @param  mixed  $value
     * @return void
     */
    protected function appliedAttributeFormat($value)
    {
        $formattedAttribute = [];
        $attributes = explode(';', $value);

        foreach ($attributes as $attribute) {
            $attr = explode(':', $attribute);

            if (isset($attr[0]) && isset($attr[1])) {
                $formattedAttribute[$attr[0]] = explode('_', $attr[1]);
            }
        }

        return $formattedAttribute;
    }

    /**
     * products, filterable, filter_applied in array formatted
     *
     * @return void
     */
    public function toArray()
    {
        return [
            'products' => $this->resource->makeHidden(['category', 'brand', 'metas'])->toArray(),
            'filterable' => $this->getFilters(),
            'filter_applied' => $this->getAppliedFilters(),
        ];
    }
}
