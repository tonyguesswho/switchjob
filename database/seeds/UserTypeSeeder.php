<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user_types')->insert([
            'name' => 'Developer',
           
        ]);
          DB::table('user_types')->insert([
            'name' => 'Company',
           
        ]);
    
    }

}
