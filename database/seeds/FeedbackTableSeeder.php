<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class FeedbackTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $usersIds = User::lists('id');
        $stars = array(1,2,3,4,5);

        foreach (range(1, 10) as $index) {
            Feedback::create([
                'user_id' => $faker->randomElement($usersIds, $count = 1),
                'rating'  => $faker->randomElement($stars),
                'content' =>$faker->text($maxNbChars = 150),
                'created_at' =>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now')

            ]);
        }
    }
}
