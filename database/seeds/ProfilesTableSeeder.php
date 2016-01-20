<?php

use App\Models\Profile as Profile;
use App\Models\User as User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    public function run()
    {

        $faker = Faker::create();


        $users = App\Models\User::all()->lists('id')->toArray();
        $userIds = App\Models\User::lists('id');
        foreach (range(1, 20) as $index) {
            $firstname = $faker->firstname;
            $lastname = $faker->lastname;
            $username = str_replace('.', '_', $faker->unique()->userName);
            $profile = Profile::create([
                //'user_id' => $faker->randomElement($users),
                'user_id'       => $faker->randomElement($userIds),
                'confirmed' => $faker->boolean($chanceOfGettingTrue = 50),
                'is_active' => $faker->boolean($chanceOfGettingTrue = 50),
                'is_fake' => true,
                'activated' => $faker->boolean($chanceOfGettingTrue = 50),
                'published' => $faker->boolean($chanceOfGettingTrue = 50),
                'is_active' => $faker->boolean($chanceOfGettingTrue = 50),
                'is_employee' => $faker->boolean($chanceOfGettingTrue = 50),
                'is_public'            => $faker->boolean($chanceOfGettingTrue = 50),
                'website' => $faker->domainName,
                'company' => $faker->company,
                'uuid' => $faker->uuid,
                'facebook_username' => $username . '_facebook',
                'twitter_username' => $username . '_twitter',
                'instagram_username' => $username . '_instagram',
                'githubid' => $username . '_github',
                'skypeid' => $username . '_skype',
                'linkedinurl' => 'http://www.linkedin.com',
                'googleplusurl' => 'http://plus.google.com',
                'facebookurl' => 'http://www.facebook.com',



                'birth_date' => $faker->date($format = 'm-d-Y', $max = 'now'),
                'dob_month' => $faker->numberBetween($min = 1, $max = 12),
                'dob_day' => $faker->numberBetween($min = 1, $max = 30),
                'dob_year' => $faker->numberBetween($min = 1980, $max = 2010),
                'pic' => $faker->imageUrl(600, 600, 'people', true, 'Faker'),
                'username' => $username,
                'display_name' => $firstname . " " . $lastname,
                'about_me'            => $faker->paragraph($nbSentences = 3),
                'phone' => $faker->phoneNumber,
                'phone_type' => 'Home',
                'position' => 'employee',
                'supervisor' => 'jaren',
                'employment_title' => 'random employee',
                'employment_role' => 'to follow nathan around the office',
                'employment_status' => 'active',
                'gender' => $faker->randomElement($array = ['Male', 'Female']),
                'note' => $faker->bs,

                'user_api_key' => str_random(32),
                'user_api_secret' => str_random(64),
                'user_activation_key' => str_random(128),
                'activation_code_id' => str_random(128),
                'activation_code' => str_random(15),
                'confirmation_code' => str_random(4),

                'profile_activated_on' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
                'published_on'  => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),

                'slug' => $faker->slug,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),



            ]);
        }
    }
}
