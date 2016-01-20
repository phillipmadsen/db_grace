<?php

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        App\Models\User::create([
            'first_name' => 'Phillip',
            'last_name' => 'Madsen',
            'email' => 'madsynn@gmail.com',
            'password' => bcrypt('madsen'),
            'last_login' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
        ]);

        foreach (range(1, 10) as $index) {
            App\Models\User::create([
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastname,
                'email' => $faker->email,
                'password' => bcrypt(str_random(10)),
                'last_login' => Carbon\Carbon::now(),
                'created_at' =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now')


            ]);
        }
    }
}
