<?php

namespace Modules\Dummy\Database\Seeders\Modules\MenuBuilder\Versions\V1_2_0;

use Illuminate\Database\Seeder;
use Modules\MenuBuilder\Http\Models\MenuItems;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $menu = MenuItems::where(['link' => 'page/home-10', 'menu' => 4])->first();

        if ($menu) {
            MenuItems::insert([
                'label' => 'Home 10',
                'link' => 'page/home-10',
                'params' => '{"permission":"no-prefix"}',
                'is_default' => 0,
                'icon' => null,
                'parent' => $menu->id,
                'sort' => 10,
                'class' => null,
                'menu' => 4,
                'depth' => 1,
                'is_custom_menu' => 1,
            ]);
        }
    }
}
