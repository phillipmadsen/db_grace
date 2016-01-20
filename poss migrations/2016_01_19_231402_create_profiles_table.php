<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('display_name')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('pic')->nullable();
			$table->enum('gender', array('Female', 'Male'))->nullable();
			$table->date('date_of_birth')->nullable();
			$table->enum('dob_month', array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'))->nullable();
			$table->enum('dob_day', array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'))->nullable();
			$table->smallInteger('dob_year')->nullable();
			$table->text('about_me')->nullable();
			$table->string('phone')->nullable();
			$table->enum('phone_type', array('Home', 'Mobile', 'Work', 'Other'))->nullable();
			$table->boolean('activated')->index()->default(0);
			$table->string('position')->nullable();
			$table->string('company')->nullable();
			$table->string('website')->nullable();
			$table->string('skypeid')->nullable();
			$table->string('twitter_username')->nullable();
			$table->string('instagram_username')->nullable();
			$table->string('facebook_username')->nullable();
			$table->string('facebookurl')->nullable();
			$table->string('linked_in_url')->nullable();
			$table->string('google_plus_url')->nullable();
			$table->string('githubid')->nullable();
			$table->text('note')->nullable();
			$table->timestamps();
			$table->integer('api_key_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('profiles');
	}
}