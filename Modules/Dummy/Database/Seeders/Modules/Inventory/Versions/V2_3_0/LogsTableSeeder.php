<?php

namespace Modules\Dummy\Database\Seeders\Modules\Inventory\Versions\V2_3_0;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{
    public function run()
    {

        \DB::table('inventory_logs')->delete();

        \DB::table('inventory_logs')->insert([
            0 => [
                'id' => 1,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1157,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '60.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            1 => [
                'id' => 2,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1169,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '85.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            2 => [
                'id' => 3,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1170,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '120.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            3 => [
                'id' => 4,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1173,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '97.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            4 => [
                'id' => 5,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1255,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '112.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            5 => [
                'id' => 6,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1180,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '225.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            6 => [
                'id' => 7,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1186,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '123.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            7 => [
                'id' => 8,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1236,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '170.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            8 => [
                'id' => 9,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1237,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '167.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            9 => [
                'id' => 10,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1238,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '332.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            10 => [
                'id' => 11,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1239,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '79.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            11 => [
                'id' => 12,
                'location_id' => 2,
                'purchase_id' => null,
                'product_id' => 1205,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '232.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            12 => [
                'id' => 13,
                'location_id' => 2,
                'purchase_id' => null,
                'product_id' => 1204,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '59.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            13 => [
                'id' => 14,
                'location_id' => 2,
                'purchase_id' => null,
                'product_id' => 1200,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '66.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            14 => [
                'id' => 15,
                'location_id' => null,
                'purchase_id' => null,
                'product_id' => null,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 1,
                'quantity' => '5.00000000',
                'transaction_type' => 'transfer_store',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'transfer',
            ],
            15 => [
                'id' => 16,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1255,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 1,
                'quantity' => '-2.00000000',
                'transaction_type' => 'moved',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'transfer',
            ],
            16 => [
                'id' => 17,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1238,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 1,
                'quantity' => '-3.00000000',
                'transaction_type' => 'moved',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'transfer',
            ],
            17 => [
                'id' => 18,
                'location_id' => 5,
                'purchase_id' => null,
                'product_id' => 1255,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 1,
                'quantity' => '2.00000000',
                'transaction_type' => 'transfer_receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            18 => [
                'id' => 19,
                'location_id' => 5,
                'purchase_id' => null,
                'product_id' => 1238,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 1,
                'quantity' => '3.00000000',
                'transaction_type' => 'transfer_receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            19 => [
                'id' => 20,
                'location_id' => null,
                'purchase_id' => null,
                'product_id' => null,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 2,
                'quantity' => '5.00000000',
                'transaction_type' => 'transfer_store',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'transfer',
            ],
            20 => [
                'id' => 21,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1236,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 2,
                'quantity' => '-3.00000000',
                'transaction_type' => 'moved',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'transfer',
            ],
            21 => [
                'id' => 22,
                'location_id' => 1,
                'purchase_id' => null,
                'product_id' => 1238,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => 2,
                'quantity' => '-2.00000000',
                'transaction_type' => 'moved',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'transfer',
            ],
            22 => [
                'id' => 23,
                'location_id' => 3,
                'purchase_id' => 1,
                'product_id' => null,
                'supplier_id' => 2,
                'currency_id' => 3,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '382.00000000',
                'transaction_type' => 'purchase_store',
                'price' => '20730.92000000',
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'purchase',
            ],
            23 => [
                'id' => 24,
                'location_id' => 1,
                'purchase_id' => 2,
                'product_id' => null,
                'supplier_id' => 1,
                'currency_id' => 3,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '76.00000000',
                'transaction_type' => 'purchase_store',
                'price' => '1029.57000000',
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'purchase',
            ],
            24 => [
                'id' => 25,
                'location_id' => 3,
                'purchase_id' => 1,
                'product_id' => 1199,
                'supplier_id' => 2,
                'currency_id' => null,
                'purchase_detail_id' => 1,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '130.00000000',
                'transaction_type' => 'receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            25 => [
                'id' => 26,
                'location_id' => 3,
                'purchase_id' => 1,
                'product_id' => 1198,
                'supplier_id' => 2,
                'currency_id' => null,
                'purchase_detail_id' => 2,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '-3.00000000',
                'transaction_type' => 'reject',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            26 => [
                'id' => 27,
                'location_id' => 3,
                'purchase_id' => 1,
                'product_id' => 1198,
                'supplier_id' => 2,
                'currency_id' => null,
                'purchase_detail_id' => 2,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '121.00000000',
                'transaction_type' => 'receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            27 => [
                'id' => 28,
                'location_id' => 3,
                'purchase_id' => 1,
                'product_id' => 1197,
                'supplier_id' => 2,
                'currency_id' => null,
                'purchase_detail_id' => 3,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '120.00000000',
                'transaction_type' => 'receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            28 => [
                'id' => 29,
                'location_id' => 1,
                'purchase_id' => 2,
                'product_id' => 1236,
                'supplier_id' => 1,
                'currency_id' => null,
                'purchase_detail_id' => 4,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '22.00000000',
                'transaction_type' => 'receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            29 => [
                'id' => 30,
                'location_id' => 1,
                'purchase_id' => 2,
                'product_id' => 1242,
                'supplier_id' => 1,
                'currency_id' => null,
                'purchase_detail_id' => 5,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '-1.00000000',
                'transaction_type' => 'reject',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            30 => [
                'id' => 31,
                'location_id' => 1,
                'purchase_id' => 2,
                'product_id' => 1242,
                'supplier_id' => 1,
                'currency_id' => null,
                'purchase_detail_id' => 5,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '20.00000000',
                'transaction_type' => 'receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            31 => [
                'id' => 32,
                'location_id' => 1,
                'purchase_id' => 2,
                'product_id' => 1169,
                'supplier_id' => 1,
                'currency_id' => null,
                'purchase_detail_id' => 6,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '33.00000000',
                'transaction_type' => 'receive',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'receive_reject',
            ],
            32 => [
                'id' => 33,
                'location_id' => 7,
                'purchase_id' => null,
                'product_id' => 1205,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '14.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            33 => [
                'id' => 34,
                'location_id' => 7,
                'purchase_id' => null,
                'product_id' => 1204,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '20.00000000',
                'transaction_type' => 'initial',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'stock_in',
            ],
            34 => [
                'id' => 35,
                'location_id' => 2,
                'purchase_id' => null,
                'product_id' => 1205,
                'supplier_id' => null,
                'currency_id' => null,
                'purchase_detail_id' => null,
                'stock_management_id' => null,
                'order_id' => null,
                'transfer_id' => null,
                'quantity' => '-2.0',
                'transaction_type' => 'Correction',
                'price' => null,
                'transaction_date' => randomDateBefore(90),
                'note' => null,
                'log_type' => 'adjust',
            ],
        ]);

    }
}
