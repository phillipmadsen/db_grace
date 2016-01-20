<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->string('nickname')->nullable()->index();
			$table->string('address')->nullable()->index();
			$table->string('street')->nullable();
			$table->string('street_additional')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('country')->nullable()->default('United States');
			$table->string('zipcode', 10)->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}