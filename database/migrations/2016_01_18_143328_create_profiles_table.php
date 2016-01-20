<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->nullable();
            $table->Integer('user_id')->unsigned()->index();

            $table->string('pic')->nullable();

            $table->string('username')->nullable();
            $table->string('display_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('position')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('employment_title')->nullable();
            $table->string('employment_role')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_type')->nullable();
            $table->string('website')->nullable();
            $table->string('company')->nullable();
            $table->string('gender')->nullable();
            $table->text('about_me')->nullable();
            $table->text('note')->nullable();

            $table->string('skypeid')->nullable();
            $table->string('githubid')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('instagram_username')->nullable();
            $table->string('facebook_username')->nullable();
            $table->string('facebookurl')->nullable();
            $table->string('linkedinurl')->nullable();
            $table->string('googleplusurl')->nullable();

            $table->string('user_api_key')->nullable();
            $table->string('user_api_secret')->nullable();
            $table->string('user_activation_key')->nullable();
            $table->string('activation_code_id')->nullable();
            $table->string('activation_code')->nullable();
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default('0');

            $table->boolean('activated')->default('0');
            $table->boolean('published')->default('0');
            $table->boolean('is_active')->default('0');
            $table->boolean('is_fake')->default('0');
            $table->boolean('is_public')->default('0');
            $table->boolean('is_employee')->default('0');

            $table->timestamp('birth_date')->nullable();
            $table->string('dob_month')->nullable();
            $table->string('dob_day')->nullable();
            $table->string('dob_year')->default('1980');

            $table->timestamp('profile_activated_on');
            $table->timestamp('activated_on');
            $table->timestamp('published_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table = 'profiles';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('profiles');

    }
}
