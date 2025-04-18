<?php

namespace Modules\Dummy\Database\Seeders\Modules\MenuBuilder\Versions\V2_9_0;

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
        MenuItems::where('link', 'order-setting')->update(['params' => '{"permission":"App\\\\Http\\\\Controllers\\\\ProductSettingController@general","route_name":["order.setting.option", "orderStatues.index", "invoice.setting.option"]}']);

        MenuItems::where('link', 'account-setting')->update(['params' => '{"permission":"App\\\\Http\\\\Controllers\\\\AccountSettingController@index","route_name":["account.setting.option", "sso.index", "emailVerifySetting", "preferences.password", "permissionRoles.index", "roles.index", "roles.create", "roles.edit", "notifications.setting", "sso.client"]}']);
        
        addMenuItem('vendor', 'Staff', [
            'icon' => 'fas fa-users',
            'link' => 'staffs',
            'params' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\StaffController@index", "route_name":["vendor.staffs.index", "vendor.staffs.create", "vendor.staffs.edit", "vendor.roles.index", "vendor.roles.create", "vendor.roles.edit", "vendor.permission.index"]}',
            'sort' => 3,
        ]);
    }
}
