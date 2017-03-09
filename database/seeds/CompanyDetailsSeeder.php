<?php

use Illuminate\Database\Seeder;

class CompanyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_details')->insert([
            'building' => str_random(10),
            'products' => str_random(10),
            'start_period' => '1 week',
            'user_id'=>'1',
            'cost'=>'16000',
            'aboutus'=>str_random(5),
        ]);
    }
}
