<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'pepsi',
                'email' => 'pepsi@local.in',
                'phone' => '0669312321',
                'website' => 'www.pepsi.228',
                'logo' => '',
            ],
            [
                'name' => 'atb',
                'email' => 'atb@local.in',
                'phone' => '0509312321',
                'website' => 'www.atb.1488',
                'logo' => '',
            ],
            [
                'name' => 'ashan',
                'email' => 'ashan@local.in',
                'phone' => '0999312321',
                'website' => 'www.ashan.com',
                'logo' => '',
            ],
        ]);
    }
}
