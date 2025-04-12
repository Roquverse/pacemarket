<?php

namespace Modules\Dummy\Database\Seeders\Core;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('attributes')->delete();

        \DB::table('attributes')->insert([
            0 => [
                'id' => 26,
                'attribute_group_id' => 28,
                'name' => 'Color',
                'description' => null,
                'type' => 'color',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            1 => [
                'id' => 27,
                'attribute_group_id' => 28,
                'name' => 'RAM',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            2 => [
                'id' => 28,
                'attribute_group_id' => 28,
                'name' => 'Storage',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            3 => [
                'id' => 29,
                'attribute_group_id' => 28,
                'name' => 'Model Number',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            4 => [
                'id' => 30,
                'attribute_group_id' => 28,
                'name' => 'Model Name',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 0,
                'is_required' => 1,
            ],
            5 => [
                'id' => 31,
                'attribute_group_id' => 28,
                'name' => 'Touchscreen',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 0,
                'is_required' => 1,
            ],
            6 => [
                'id' => 32,
                'attribute_group_id' => 28,
                'name' => 'Browse Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            7 => [
                'id' => 33,
                'attribute_group_id' => 28,
                'name' => 'Display Size',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            8 => [
                'id' => 34,
                'attribute_group_id' => 28,
                'name' => 'Resolution',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            9 => [
                'id' => 35,
                'attribute_group_id' => 28,
                'name' => 'Display Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            10 => [
                'id' => 36,
                'attribute_group_id' => 28,
                'name' => 'Operating System',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            11 => [
                'id' => 37,
                'attribute_group_id' => 28,
                'name' => 'Processor Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            12 => [
                'id' => 38,
                'attribute_group_id' => 28,
                'name' => 'Sim Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            13 => [
                'id' => 39,
                'attribute_group_id' => 28,
                'name' => 'Network Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            14 => [
                'id' => 40,
                'attribute_group_id' => 28,
                'name' => 'Battery Capacity',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            15 => [
                'id' => 41,
                'attribute_group_id' => 28,
                'name' => 'Weight',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            16 => [
                'id' => 42,
                'attribute_group_id' => 28,
                'name' => 'SIM Size',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            17 => [
                'id' => 55,
                'attribute_group_id' => 28,
                'name' => 'Processor Core',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 0,
                'is_required' => 1,
            ],
            18 => [
                'id' => 239,
                'attribute_group_id' => 28,
                'name' => 'Removable Battery',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            19 => [
                'id' => 241,
                'attribute_group_id' => 28,
                'name' => 'Bluetooth Version',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            20 => [
                'id' => 265,
                'attribute_group_id' => 29,
                'name' => 'Operating Frequency',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            21 => [
                'id' => 267,
                'attribute_group_id' => 29,
                'name' => 'Smartphones',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            22 => [
                'id' => 276,
                'attribute_group_id' => 32,
                'name' => 'Battery Cell',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            23 => [
                'id' => 277,
                'attribute_group_id' => 32,
                'name' => 'Processor Brand',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            24 => [
                'id' => 278,
                'attribute_group_id' => 32,
                'name' => 'Processor Name',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            25 => [
                'id' => 279,
                'attribute_group_id' => 32,
                'name' => 'Processor Generation',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            26 => [
                'id' => 281,
                'attribute_group_id' => 32,
                'name' => 'SSD',
                'description' => 'Describe Storage of hp laptops',
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ],
            27 => [
                'id' => 282,
                'attribute_group_id' => 32,
                'name' => 'Number of Cores',
                'description' => 'Describe Number of Cores of hp laptops',
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            28 => [
                'id' => 284,
                'attribute_group_id' => 32,
                'name' => 'System Architecture',
                'description' => 'Describe System Architecture of hp laptops',
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            29 => [
                'id' => 285,
                'attribute_group_id' => 32,
                'name' => 'Screen Size',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            30 => [
                'id' => 286,
                'attribute_group_id' => 32,
                'name' => 'Screen Resolution',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            31 => [
                'id' => 292,
                'attribute_group_id' => 32,
                'name' => 'Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            32 => [
                'id' => 298,
                'attribute_group_id' => 32,
                'name' => 'OS Architecture',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            33 => [
                'id' => 299,
                'attribute_group_id' => 32,
                'name' => 'Dimensions',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            34 => [
                'id' => 305,
                'attribute_group_id' => 32,
                'name' => 'Battery Backup',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            35 => [
                'id' => 322,
                'attribute_group_id' => 32,
                'name' => 'RAM Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            36 => [
                'id' => 341,
                'attribute_group_id' => 33,
                'name' => 'Brand',
                'description' => 'Describe brand of dslr',
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            37 => [
                'id' => 344,
                'attribute_group_id' => 33,
                'name' => 'Video Resolution',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            38 => [
                'id' => 347,
                'attribute_group_id' => 33,
                'name' => 'Battery Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            39 => [
                'id' => 349,
                'attribute_group_id' => 33,
                'name' => 'Sensor Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            40 => [
                'id' => 357,
                'attribute_group_id' => 33,
                'name' => 'Image Sensor Size',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            41 => [
                'id' => 359,
                'attribute_group_id' => 33,
                'name' => 'Touch Screen',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            42 => [
                'id' => 365,
                'attribute_group_id' => 33,
                'name' => 'Image Sensor Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            43 => [
                'id' => 368,
                'attribute_group_id' => 33,
                'name' => 'Video Quality',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            44 => [
                'id' => 370,
                'attribute_group_id' => 33,
                'name' => 'Compatible Card',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            45 => [
                'id' => 372,
                'attribute_group_id' => 33,
                'name' => 'Lens Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            46 => [
                'id' => 376,
                'attribute_group_id' => 33,
                'name' => 'Battery',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            47 => [
                'id' => 383,
                'attribute_group_id' => 33,
                'name' => 'Video Format',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            48 => [
                'id' => 388,
                'attribute_group_id' => 33,
                'name' => 'Display Resolution',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            49 => [
                'id' => 393,
                'attribute_group_id' => 33,
                'name' => 'Storage Type',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
            50 => [
                'id' => 397,
                'attribute_group_id' => 33,
                'name' => 'HDD Available',
                'description' => null,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ],
        ]);

    }
}
