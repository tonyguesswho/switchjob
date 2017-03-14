<?php

use Illuminate\Database\Seeder;

class userdetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userdetails')->insert([
            'username' => str_random(10),
            'address' => str_random(10),
            'postal_code' => rand(10000,20000),
            'user_id'=>'1',
            'about_me'=>str_random(100),
            
        ]);
        DB::table('userdetails')->insert([
            'username' => str_random(10),
            'address' => str_random(10),
            'postal_code' => rand(10000,20000),
            'user_id'=>'5',
            'about_me'=>str_random(100),
            
        ]);
        DB::table('userdetails')->insert([
            'username' => str_random(10),
            'address' => str_random(10),
            'postal_code' => rand(10000,20000),
            'user_id'=>'3',
            'about_me'=>str_random(100),
            
        ]);
        DB::table('userdetails')->insert([
            'username' => str_random(10),
            'address' => str_random(10),
            'postal_code' => rand(10000,20000),
            'user_id'=>'2',
            'about_me'=>str_random(100),
            
        ]);
    }
}
