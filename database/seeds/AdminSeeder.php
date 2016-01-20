<?php
    use App\Models\User as User;
    use App\Models\Profile as Profile;
    use Faker\Factory as Faker;
    use Carbon\Carbon;

class AdminSeeder extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();


        $admin = User::create([
            'id'         => 1,
            'first_name' => 'Phillip',
            'last_name'  => 'Madsen',
            'email'      => 'phillip@graceframe.com',
            'password'   => bcrypt('mad15696'),
            'last_login' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);


        $adminProfile = Profile::create([
            'user_ id'           => 1,
            'username'           => 'phillipmadsen',
            'facebook_username'  => 'phillipmadsen',
            'twitter_username'   => 'phillipmadsen',
            'instagram_username' => 'phillipmadsen',
        ]);
        $admin->profile()->save($adminProfile);


        $phillip = User::create([
            'id'         => 2,
            'first_name' => 'Phillip',
            'last_name'  => 'Madsen',
            'email'      => 'madsynn@gmail.com',
            'password'   => bcrypt('mad15696'),
            'last_login' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $phillipProfile = Profile::create([
            'user_ id'           => 2,
            'username'           => 'phillipmadsen',
            'facebook_username'  => 'phillipmadsen',
            'twitter_username'   => 'phillipmadsen',
            'instagram_username' => 'phillipmadsen',
        ]);
        $phillip->profile()->save($phillipProfile);

    }
}
