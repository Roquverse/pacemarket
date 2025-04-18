<?php

namespace Modules\Dummy\Database\Seeders\Core;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('product_categories')->delete();

        \DB::table('product_categories')->insert([
            0 => [
                'product_id' => 1205,
                'category_id' => 504,
            ],
            1 => [
                'product_id' => 1204,
                'category_id' => 504,
            ],
            2 => [
                'product_id' => 1203,
                'category_id' => 504,
            ],
            3 => [
                'product_id' => 1202,
                'category_id' => 504,
            ],
            4 => [
                'product_id' => 1201,
                'category_id' => 504,
            ],
            5 => [
                'product_id' => 1200,
                'category_id' => 504,
            ],
            6 => [
                'product_id' => 1199,
                'category_id' => 518,
            ],
            7 => [
                'product_id' => 1198,
                'category_id' => 511,
            ],
            8 => [
                'product_id' => 1197,
                'category_id' => 511,
            ],
            9 => [
                'product_id' => 1196,
                'category_id' => 511,
            ],
            10 => [
                'product_id' => 1195,
                'category_id' => 511,
            ],
            11 => [
                'product_id' => 1194,
                'category_id' => 511,
            ],
            12 => [
                'product_id' => 1193,
                'category_id' => 511,
            ],
            13 => [
                'product_id' => 1192,
                'category_id' => 511,
            ],
            14 => [
                'product_id' => 1191,
                'category_id' => 511,
            ],
            15 => [
                'product_id' => 1189,
                'category_id' => 511,
            ],
            16 => [
                'product_id' => 1190,
                'category_id' => 511,
            ],
            17 => [
                'product_id' => 1188,
                'category_id' => 511,
            ],
            18 => [
                'product_id' => 1187,
                'category_id' => 511,
            ],
            19 => [
                'product_id' => 1186,
                'category_id' => 58,
            ],
            20 => [
                'product_id' => 1185,
                'category_id' => 56,
            ],
            21 => [
                'product_id' => 1184,
                'category_id' => 39,
            ],
            22 => [
                'product_id' => 1183,
                'category_id' => 39,
            ],
            23 => [
                'product_id' => 1182,
                'category_id' => 63,
            ],
            24 => [
                'product_id' => 1181,
                'category_id' => 38,
            ],
            25 => [
                'product_id' => 1180,
                'category_id' => 38,
            ],
            26 => [
                'product_id' => 1179,
                'category_id' => 42,
            ],
            27 => [
                'product_id' => 1178,
                'category_id' => 38,
            ],
            28 => [
                'product_id' => 1177,
                'category_id' => 39,
            ],
            29 => [
                'product_id' => 1176,
                'category_id' => 39,
            ],
            30 => [
                'product_id' => 1175,
                'category_id' => 39,
            ],
            31 => [
                'product_id' => 1174,
                'category_id' => 39,
            ],
            32 => [
                'product_id' => 1173,
                'category_id' => 41,
            ],
            33 => [
                'product_id' => 1172,
                'category_id' => 41,
            ],
            34 => [
                'product_id' => 1171,
                'category_id' => 41,
            ],
            35 => [
                'product_id' => 1170,
                'category_id' => 41,
            ],
            36 => [
                'product_id' => 1169,
                'category_id' => 510,
            ],
            37 => [
                'product_id' => 1168,
                'category_id' => 42,
            ],
            38 => [
                'product_id' => 1167,
                'category_id' => 42,
            ],
            39 => [
                'product_id' => 1166,
                'category_id' => 42,
            ],
            40 => [
                'product_id' => 1165,
                'category_id' => 42,
            ],
            41 => [
                'product_id' => 1164,
                'category_id' => 41,
            ],
            42 => [
                'product_id' => 1163,
                'category_id' => 42,
            ],
            43 => [
                'product_id' => 1162,
                'category_id' => 521,
            ],
            44 => [
                'product_id' => 1161,
                'category_id' => 521,
            ],
            45 => [
                'product_id' => 1160,
                'category_id' => 515,
            ],
            46 => [
                'product_id' => 1159,
                'category_id' => 42,
            ],
            47 => [
                'product_id' => 1158,
                'category_id' => 42,
            ],
            48 => [
                'product_id' => 1157,
                'category_id' => 39,
            ],
            49 => [
                'product_id' => 1156,
                'category_id' => 510,
            ],
            50 => [
                'product_id' => 1155,
                'category_id' => 95,
            ],
            51 => [
                'product_id' => 1154,
                'category_id' => 95,
            ],
            52 => [
                'product_id' => 1153,
                'category_id' => 95,
            ],
            53 => [
                'product_id' => 1152,
                'category_id' => 511,
            ],
            54 => [
                'product_id' => 1151,
                'category_id' => 512,
            ],
            55 => [
                'product_id' => 1150,
                'category_id' => 46,
            ],
            56 => [
                'product_id' => 1149,
                'category_id' => 511,
            ],
            57 => [
                'product_id' => 1148,
                'category_id' => 511,
            ],
            58 => [
                'product_id' => 1147,
                'category_id' => 511,
            ],
            59 => [
                'product_id' => 1146,
                'category_id' => 511,
            ],
            60 => [
                'product_id' => 1145,
                'category_id' => 512,
            ],
            61 => [
                'product_id' => 1144,
                'category_id' => 511,
            ],
            62 => [
                'product_id' => 1143,
                'category_id' => 511,
            ],
            63 => [
                'product_id' => 1142,
                'category_id' => 511,
            ],
            64 => [
                'product_id' => 1141,
                'category_id' => 511,
            ],
            65 => [
                'product_id' => 1140,
                'category_id' => 533,
            ],
            66 => [
                'product_id' => 1139,
                'category_id' => 533,
            ],
            67 => [
                'product_id' => 1138,
                'category_id' => 533,
            ],
            68 => [
                'product_id' => 1137,
                'category_id' => 526,
            ],
            69 => [
                'product_id' => 1136,
                'category_id' => 527,
            ],
            70 => [
                'product_id' => 1135,
                'category_id' => 525,
            ],
            71 => [
                'product_id' => 1130,
                'category_id' => 504,
            ],
            72 => [
                'product_id' => 1131,
                'category_id' => 511,
            ],
            73 => [
                'product_id' => 1132,
                'category_id' => 510,
            ],
            74 => [
                'product_id' => 1133,
                'category_id' => 39,
            ],
            75 => [
                'product_id' => 1134,
                'category_id' => 46,
            ],
        ]);

    }
}
