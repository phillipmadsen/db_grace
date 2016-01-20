<?php

use App\Models\User;
use App\Models\Profile;
use App\Models\Article;

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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'last_login' => Carbon\Carbon::now(),
        'created_at' =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now')

    ];
});
