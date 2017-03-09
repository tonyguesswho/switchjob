<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(App\Job::class, function (Faker\Generator $faker) {
   // static $password;

    return [
        'user_id' => $faker->randomDigit,
        'job_type_id' => $faker->randomDigit,
        'platform_type_id' => $faker->randomDigit,
        'description' =>$faker ->text,
        'example_app' => $faker->text,
        'job_attachment'=> $faker->text,
        'start_date' => $faker->date,
        'job_scope' => $faker->text,
       
    ];
});