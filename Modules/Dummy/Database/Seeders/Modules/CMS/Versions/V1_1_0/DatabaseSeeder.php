<?php

namespace Modules\Dummy\Database\Seeders\Modules\CMS\Versions\V1_1_0;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PageTableSeeder::class);
    }
}
