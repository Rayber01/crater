<?php

use Illuminate\Database\Seeder;
use Crater\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create(['name' => 'caja', 'company_id' => 1]);
        Unit::create(['name' => 'c/u', 'company_id' => 1]);
    }
}