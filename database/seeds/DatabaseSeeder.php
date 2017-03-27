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
        $this->call(CompanyDetailsSeeder::class);
        $this->call(developerTableSeeder::class);
        $this->call(userdetailTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserTypeSeeder::class);
    }
}
