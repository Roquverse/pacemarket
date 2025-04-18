<?php

namespace Modules\Dummy\Database\Seeders\Modules\Commission;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommissionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CommissionsTableSeeder::class);
    }
}
