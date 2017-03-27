<?php

use Illuminate\Database\Seeder;

class developerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            'user_id' => rand(1,5),
            'years_of_experience' => rand(2,9),
            'pass_work' => str_random(5),
            'languages'=>str_random(6),
            'frameworks'=>str_random(6),
            'available_hours'=>rand(20,70),
        ]);
        DB::table('developers')->insert([
            'user_id' => rand(1,5),
            'years_of_experience' => rand(2,9),
            'pass_work' => str_random(5),
            'languages'=>str_random(6),
            'frameworks'=>str_random(6),
            'available_hours'=>rand(20,70),
        ]);
        DB::table('developers')->insert([
            'user_id' => rand(1,5),
            'years_of_experience' => rand(2,9),
            'pass_work' => str_random(5),
            'languages'=>str_random(6),
            'frameworks'=>str_random(6),
            'available_hours'=>rand(20,70),
        ]);

        DB::table('developers')->insert([
            'user_id' => rand(1,5),
            'years_of_experience' => rand(2,9),
            'pass_work' => str_random(5),
            'languages'=>str_random(6),
            'frameworks'=>str_random(6),
            'available_hours'=>rand(20,70),
        ]);
    }
}
