<?php

namespace Modules\Dummy\Database\Seeders\Core\Versions\V2_9_1;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PreferencesTableSeeder::class,
            UserTableSeeder::class,
            RoleTableSeeder::class,
            RoleUserTableSeeder::class,
            PermissionRoleTableSeeder::class,
        ]);
    }
}
