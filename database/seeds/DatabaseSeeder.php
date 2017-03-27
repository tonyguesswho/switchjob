<?php

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

    	factory(App\Job::class, 10)->create();
        // $this->call(UsersTableSeeder::class);

        factory(App\CompanyDetail::class, 10)->create();


        factory(App\DeveloperCompleted::class, 10)->create();

        factory(App\LiveProject::class, 10)->create();
    }
}
