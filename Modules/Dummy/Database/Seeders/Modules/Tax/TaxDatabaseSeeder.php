<?php

namespace Modules\Dummy\Database\Seeders\Modules\Tax;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TaxDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AdminMenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(TaxClassesTableSeeder::class);
        $this->call(TaxRatesTableSeeder::class);
    }
}
