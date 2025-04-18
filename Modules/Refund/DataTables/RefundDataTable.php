<?php
/**
 * @author TechVillage <support@techvill.org>
 *
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 *
 * @created 18-11-2021
 */

namespace Modules\Refund\DataTables;

use App\DataTables\DataTable;
use Illuminate\Http\JsonResponse;
use Modules\Refund\Entities\Refund;

class RefundDataTable extends DataTable
{
    /**
     * Handle the AJAX request for attribute groups.
     *
     * This function queries attribute groups and returns the data in a format suitable
     * for DataTables to consume via AJAX.
     *
      @return \Illuminate\Http\JsonResponse
     */
    public function ajax(): JsonResponse
    {
        $refunds = $this->query();

        return datatables()
            ->of($refunds)

            ->addColumn('reference', function ($refunds) {
                if (! is_null(optional($refunds->orderDetail)->order)) {
                    return '<a href="' . route('order.view', ['id' => $refunds->orderDetail->order->id]) . '">' . $refunds->orderDetail->order->reference . '</a>';
                }

                return __('Unavailable');
            })
            ->editColumn('orderDetail.price', function ($refunds) {
                return formatNumber(optional($refunds->orderDetail)->price);
            })
            ->editColumn('shipping_method', function ($refunds) {
                return $refunds->shipping_method;
            })
            ->editColumn('refundReason.name', function ($refunds) {
                return optional($refunds->refundReason)->name;
            })
            ->editColumn('status', function ($refunds) {
                return statusBadges(lcfirst($refunds->status));
            })->addColumn('action', function ($refunds) {
                $edit = '<a data-bs-toggle="tooltip" title="' . __('Show') . '" href="' . route('refund.edit', ['id' => $refunds->id]) . '" class="action-icon"><i class="feather icon-eye"></i></a>&nbsp';

                $str = '';
                if (auth()->user()?->hasPermission('Modules\Refund\Http\Controllers\RefundController@edit')) {
                    $str .= $edit;
                }

                return $str;
            })

            ->rawColumns(['reference', 'shipping_method', 'name', 'quantity_sent', 'price', 'status', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $refunds = Refund::with(['orderDetail:id,order_id,price', 'refundReason'])->filter();

        return $this->applyScopes($refunds);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'reference', 'name' => 'reference', 'title' => __('Order ID')])
            ->addColumn(['data' => 'shipping_method', 'name' => 'shipping_method', 'title' => __('Shipping')])
            ->addColumn(['data' => 'refundReason.name', 'name' => 'refundReason.name', 'title' => __('Refund Reason')])
            ->addColumn(['data' => 'quantity_sent', 'name' => 'quantity_sent', 'title' => __('Quantity')])
            ->addColumn(['data' => 'orderDetail.price', 'name' => 'orderDetail.price', 'title' => __('Amount'), 'orderable' => false])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => '', 'width' => '5%',
                'visible' => auth()->user()?->hasAnyPermission(['Modules\Refund\Http\Controllers\RefundController@edit']),
                'orderable' => false, 'searchable' => false, 'className' => 'text-right align-middle'])
            ->parameters(dataTableOptions(['dom' => 'Bfrtip']));
    }

    public function setViewData()
    {
        $statusCounts = $this->query()
            ->selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        $this->data['groups'] = ['All' => $statusCounts->sum()] + $statusCounts->toArray();
    }
}
