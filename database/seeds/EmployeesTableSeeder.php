<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'first_name' => 'dima',
                'last_name' => 'dima@local.in',
                'company_id' => 1,
                'email' => 'www.dima.228',
                'phone' => '0506931231',
            ],
            [
                'first_name' => 'artem',
                'last_name' => 'artem@local.in',
                'company_id' => 2,
                'email' => 'www.artem.1488',
                'phone' => '0996931231',
            ],
            [
                'first_name' => 'sveta',
                'last_name' => 'svet@local.in',
                'company_id' => 3,
                'email' => 'www.sveta.1337',
                'phone' => '0676931231',
            ],
        ]);
    }
}
