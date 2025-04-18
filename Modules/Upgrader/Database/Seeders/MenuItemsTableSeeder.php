<?php

namespace Modules\Upgrader\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('menu_items')->upsert([
            ['id' => 142, 'label' => 'System Update', 'link' => 'system-update', 'params' => '{"permission":"Modules\\\\Upgrater\\\\Http\\\\Controllers\\\\SystemUpdateController@upgrade", "route_name":["systemUpdate.upgrade", "version.check"], "menu_level":"2"}', 'is_default' => 1, 'icon' => null, 'parent' => 31, 'sort' => 60, 'class' => null, 'menu' => 1, 'depth' => 1],
        ], 'id');

        MenuItems::where('label', 'System Update')->update(['label' => '{"en":"System Update","bn":"সিস্টেম আপডেট","fr":"Mise à jour du système","zh":"系统更新","ar":"تحديث النظام","be":"Абнаўленне сістэмы","bg":"Актуализиране на системата","ca":"Actualització del sistema","et":"Süsteemi uuendus","nl":"Systeemupdate"}']);
    }
}
