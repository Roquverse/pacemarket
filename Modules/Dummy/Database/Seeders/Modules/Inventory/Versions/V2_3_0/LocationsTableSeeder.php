<?php

namespace Modules\Dummy\Database\Seeders\Modules\Inventory\Versions\V2_3_0;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('locations')->delete();

        \DB::table('locations')->insert([
            0 => [
                'id' => 1,
                'shop_id' => 2,
                'vendor_id' => 1,
                'name' => 'Gadgets',
                'slug' => 'gadgets',
                'address' => 'Dhaka, Bangladesh',
                'country' => 'bd',
                'status' => 'Active',
                'is_default' => 1,
            ],
            1 => [
                'id' => 2,
                'shop_id' => 7,
                'vendor_id' => 16,
                'name' => 'Furniture',
                'slug' => 'furniture',
                'address' => 'House no 12, Road no 21,Dhaka, Bangladesh',
                'country' => 'bd',
                'status' => 'Active',
                'is_default' => 1,
            ],
            2 => [
                'id' => 3,
                'shop_id' => 5,
                'vendor_id' => 19,
                'name' => 'Clothes',
                'slug' => 'clothes',
                'address' => 'House no 19, Road no 2, Dhaka, Bangladesh',
                'country' => 'bd',
                'status' => 'Active',
                'is_default' => 1,
            ],
            3 => [
                'id' => 4,
                'shop_id' => 2,
                'vendor_id' => 1,
                'name' => 'Organic',
                'slug' => 'organic',
                'address' => 'Dhaka, Bangladesh',
                'country' => 'bd',
                'status' => 'Active',
                'is_default' => 0,
            ],
            4 => [
                'id' => 5,
                'shop_id' => 2,
                'vendor_id' => 1,
                'name' => 'Gadgets-2',
                'slug' => 'gadgets-2',
                'address' => 'Dhaka, Gazipur, Bangladesh',
                'country' => 'bd',
                'status' => 'Active',
                'is_default' => 0,
            ],
            5 => [
                'id' => 6,
                'shop_id' => 2,
                'vendor_id' => 1,
                'name' => 'Foods',
                'slug' => 'food',
                'address' => 'Dhaka, Bangladesh',
                'country' => 'bd',
                'status' => 'Inactive',
                'is_default' => 0,
            ],
            6 => [
                'id' => 7,
                'shop_id' => 7,
                'vendor_id' => 16,
                'name' => 'Furniture-2',
                'slug' => 'furniture-2',
                'address' => 'Dhaka, Bangladesh',
                'country' => 'bd',
                'status' => 'Active',
                'is_default' => 0,
            ],
        ]);
    }
}
