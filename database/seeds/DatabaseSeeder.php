<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('AdminSeeder');
            $this->call('UsersTableSeeder');
            $this->call('ProfilesTableSeeder');
        $this->call('ArticlesTableSeeder');
        $this->call('NewsTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('ArticlesTagsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('PhotoGalleriesTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('MenusTableSeeder');
        $this->call('SlidersTableSeeder');
        $this->call('FaqsTableSeeder');
        $this->call('ProjectsTableSeeder');
        $this->call('VideosTableSeeder');
        $this->call('SlidersTableSeeder');
    }
}
