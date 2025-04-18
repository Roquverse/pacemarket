<?php

namespace Modules\Dummy\Database\Seeders\Core;

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('order_details')->delete();

        \DB::table('order_details')->insert([
            0 => [
                'id' => 1,
                'product_id' => 1205,
                'parent_id' => null,
                'order_id' => 1,
                'vendor_id' => 16,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'One Seat Pillow Yellow Sufa',
                'price' => '400.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '3.00000000',
                'tax_charge' => '20.24000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1205,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            1 => [
                'id' => 2,
                'product_id' => 1203,
                'parent_id' => null,
                'order_id' => 1,
                'vendor_id' => 16,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Modern Design Four Legs Chair withou Arms',
                'price' => '270.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '3.00000000',
                'tax_charge' => '0.00000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1203,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            2 => [
                'id' => 3,
                'product_id' => 1204,
                'parent_id' => null,
                'order_id' => 1,
                'vendor_id' => 16,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Modern Designer Chair Isolated White Background Furniture Set 3D Render',
                'price' => '215.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '3.00000000',
                'tax_charge' => '10.87900000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1204,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            3 => [
                'id' => 4,
                'product_id' => 1199,
                'parent_id' => null,
                'order_id' => 2,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Waist straight Slouchy jeans',
                'price' => '40.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '0.00000000',
                'tax_charge' => '2.02400000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1199,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            4 => [
                'id' => 5,
                'product_id' => 1251,
                'parent_id' => 1178,
                'order_id' => 3,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Smart Bracelet Sports Bracelet D13 Color Screen Bracelet Sports Pedometer Bluetooth Reminder Heart Rate Blood Pressure',
                'price' => '25.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '2.00000000',
                'tax_charge' => '1.26500000',
                'hsn' => null,
                'payloads' => '{"Color":"Black"}',
                'order_by' => 1251,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            5 => [
                'id' => 6,
                'product_id' => 1306,
                'parent_id' => 1144,
                'order_id' => 4,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Woman Korean O-neck Knitted Pullovers Thick Autumn Winter Candy Color Loose Hoodies Solid Womens Clothing',
                'price' => '75.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '2.00000000',
                'tax_charge' => '3.79500000',
                'hsn' => null,
                'payloads' => '{"Color":"Grey"}',
                'order_by' => 1306,
                'order_status_id' => 1,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            6 => [
                'id' => 7,
                'product_id' => 1275,
                'parent_id' => 1156,
                'order_id' => 5,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Boys Shirts Classic Casual Plaid Flannel Children shirts',
                'price' => '25.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '0.00000000',
                'tax_charge' => '1.26500000',
                'hsn' => null,
                'payloads' => '{"Color":"Orange"}',
                'order_by' => 1275,
                'order_status_id' => 5,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            7 => [
                'id' => 8,
                'product_id' => 1201,
                'parent_id' => null,
                'order_id' => 6,
                'vendor_id' => 16,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Pillow Chair without Arm',
                'price' => '370.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '3.00000000',
                'tax_charge' => '18.72200000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1201,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            8 => [
                'id' => 9,
                'product_id' => 1183,
                'parent_id' => null,
                'order_id' => 7,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'USB 2.0 Flash Pen Drive 32GB 16GB 64GB 128GB Squid Game Cle Usb Memorys Cards',
                'price' => '6.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '0.12000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1183,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            9 => [
                'id' => 10,
                'product_id' => 1200,
                'parent_id' => null,
                'order_id' => 7,
                'vendor_id' => 16,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Pillow Chair with Arm Moveable',
                'price' => '325.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '30.00000000',
                'tax_charge' => '6.50000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1200,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 0,
            ],
            10 => [
                'id' => 11,
                'product_id' => 1151,
                'parent_id' => null,
                'order_id' => 7,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Newborn Baby Boys Girls Fall Outfits Long Sleeve Plaid Pattern Pullover Tops and Pants Spring Clothes Set',
                'price' => '77.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '1.54000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1151,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            11 => [
                'id' => 12,
                'product_id' => 1244,
                'parent_id' => 1180,
                'order_id' => 8,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Smartwatch Men Support 118 Sports Women Smart Watch',
                'price' => '28.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '0.56000000',
                'hsn' => null,
                'payloads' => '{"Color":"Pink"}',
                'order_by' => 1244,
                'order_status_id' => 6,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 0,
            ],
            12 => [
                'id' => 13,
                'product_id' => 1137,
                'parent_id' => null,
                'order_id' => 8,
                'vendor_id' => 2,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Branding PSD Mockups For Your Business',
                'price' => '50.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '0.00000000',
                'tax_charge' => '0.00000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1137,
                'order_status_id' => 6,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 0,
            ],
            13 => [
                'id' => 14,
                'product_id' => 1325,
                'parent_id' => 1141,
                'order_id' => 9,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Women Solid Jacket Thick Short Hoodies Sweatshirt Kangaroo Long Sleeve Sweatshirt',
                'price' => '89.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '1.78000000',
                'hsn' => null,
                'payloads' => '{"Color":"Grey","Size":"M"}',
                'order_by' => 1325,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            14 => [
                'id' => 15,
                'product_id' => 1281,
                'parent_id' => 1155,
                'order_id' => 9,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Cotton Newborn Baby Long Sleeve Romper Jumpsuits Outfits Boy Toddler Handsome',
                'price' => '59.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '1.18000000',
                'hsn' => null,
                'payloads' => '{"Color":"Black"}',
                'order_by' => 1281,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            15 => [
                'id' => 16,
                'product_id' => 1242,
                'parent_id' => 1180,
                'order_id' => 9,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Smartwatch Men Support 118 Sports Women Smart Watch',
                'price' => '25.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '0.50000000',
                'hsn' => null,
                'payloads' => '{"Color":"Blue"}',
                'order_by' => 1242,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            16 => [
                'id' => 17,
                'product_id' => 1268,
                'parent_id' => 1162,
                'order_id' => 9,
                'vendor_id' => 17,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Women Chain Small Shoulder Bags Fashion Pu Leather Silk Scarf Crossbody Bags',
                'price' => '25.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '0.50000000',
                'hsn' => null,
                'payloads' => '{"Color":"White"}',
                'order_by' => 1268,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            17 => [
                'id' => 18,
                'product_id' => 1183,
                'parent_id' => null,
                'order_id' => 10,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'USB 2.0 Flash Pen Drive 32GB 16GB 64GB 128GB Squid Game Cle Usb Memorys Cards',
                'price' => '6.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '0.30360000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1183,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            18 => [
                'id' => 19,
                'product_id' => 1176,
                'parent_id' => null,
                'order_id' => 10,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'USB 3.0 Type A Female to A Female Connector Adapter AF to AF Coupler FF Gender Changer Extender Converter',
                'price' => '2.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '0.10120000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1176,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            19 => [
                'id' => 20,
                'product_id' => 1202,
                'parent_id' => null,
                'order_id' => 10,
                'vendor_id' => 16,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Legs Modern Design Pillow Chair',
                'price' => '300.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '0.00000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1202,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            20 => [
                'id' => 21,
                'product_id' => 1200,
                'parent_id' => null,
                'order_id' => 11,
                'vendor_id' => 16,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Pillow Chair with Arm Moveable',
                'price' => '325.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '6.50000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1200,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 0,
            ],
            21 => [
                'id' => 22,
                'product_id' => 1177,
                'parent_id' => null,
                'order_id' => 11,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'USB Cable With Switch ONOFF Cable Extension Toggle For USB Lamp USB Fan Power Supply Line Durable',
                'price' => '5.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '2.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '0.00000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1177,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            22 => [
                'id' => 23,
                'product_id' => 1157,
                'parent_id' => null,
                'order_id' => 11,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Wireless Game Controller for Switch Pro Lite Olde Gamepad Joystick for PC Game Controller',
                'price' => '26.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '4.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '1.00000000',
                'tax_charge' => '2.08000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1157,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            23 => [
                'id' => 24,
                'product_id' => 1183,
                'parent_id' => null,
                'order_id' => 12,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'USB 2.0 Flash Pen Drive 32GB 16GB 64GB 128GB Squid Game Cle Usb Memorys Cards',
                'price' => '6.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '0.12000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1183,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            24 => [
                'id' => 25,
                'product_id' => 1313,
                'parent_id' => 1143,
                'order_id' => 12,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Women Chiffon Solid Pure Basic Soft Red Blouses Tops Summer Top Casual Loose Short Sleeve',
                'price' => '45.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '0.90000000',
                'hsn' => null,
                'payloads' => '{"Color":"Pale Blue Lily","Size":"M"}',
                'order_by' => 1313,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            25 => [
                'id' => 26,
                'product_id' => 1308,
                'parent_id' => 1144,
                'order_id' => 12,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Woman Korean O-neck Knitted Pullovers Thick Autumn Winter Candy Color Loose Hoodies Solid Womens Clothing',
                'price' => '75.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '1.50000000',
                'hsn' => null,
                'payloads' => '{"Color":"Pink"}',
                'order_by' => 1308,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            26 => [
                'id' => 27,
                'product_id' => 1305,
                'parent_id' => 1144,
                'order_id' => 12,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Woman Korean O-neck Knitted Pullovers Thick Autumn Winter Candy Color Loose Hoodies Solid Womens Clothing',
                'price' => '75.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '1.50000000',
                'hsn' => null,
                'payloads' => '{"Color":"White"}',
                'order_by' => 1305,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            27 => [
                'id' => 28,
                'product_id' => 1151,
                'parent_id' => null,
                'order_id' => 12,
                'vendor_id' => 19,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Newborn Baby Boys Girls Fall Outfits Long Sleeve Plaid Pattern Pullover Tops and Pants Spring Clothes Set',
                'price' => '77.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '1.54000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1151,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 1,
            ],
            28 => [
                'id' => 29,
                'product_id' => 1137,
                'parent_id' => null,
                'order_id' => 13,
                'vendor_id' => 2,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Branding PSD Mockups For Your Business',
                'price' => '50.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '0.00000000',
                'tax_charge' => '0.00000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1137,
                'order_status_id' => 4,
                'is_delivery' => 1,
                'is_on_time' => 1,
                'is_stock_reduce' => 0,
            ],
            29 => [
                'id' => 30,
                'product_id' => 1185,
                'parent_id' => null,
                'order_id' => 14,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Cartoon Camera Children\'s Camera 240W Pixel Mini Camera Toy Camera',
                'price' => '350.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '7.00000000',
                'hsn' => null,
                'payloads' => null,
                'order_by' => 1185,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            30 => [
                'id' => 31,
                'product_id' => 1239,
                'parent_id' => 1186,
                'order_id' => 14,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'Anti-Drop AirPods1 2 Silicone Bluetooth Compatible Earphone Cover Air Pods',
                'price' => '29.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '0.58000000',
                'hsn' => null,
                'payloads' => '{"Color":"Green"}',
                'order_by' => 1239,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
            31 => [
                'id' => 32,
                'product_id' => 1241,
                'parent_id' => 1182,
                'order_id' => 14,
                'vendor_id' => 1,
                'shop_id' => null,
                'description' => null,
                'product_name' => 'NVME Case Aluminum M2 to USB 3.1 Gen 2 10Gbps PCIe Type C SSD M.2 Enclosure Portable Box',
                'price' => '830.00000000',
                'quantity_sent' => '0.00000000',
                'quantity' => '1.00000000',
                'discount_amount' => null,
                'discount_type' => null,
                'shipping_charge' => '15.00000000',
                'tax_charge' => '16.60000000',
                'hsn' => null,
                'payloads' => '{"Storage":"512 GB"}',
                'order_by' => 1241,
                'order_status_id' => 3,
                'is_delivery' => 0,
                'is_on_time' => null,
                'is_stock_reduce' => 1,
            ],
        ]);

    }
}
