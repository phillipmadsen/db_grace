<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingAddressesTable extends Migration {

	public function up()
	{
		Schema::create('shipping_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->string('shipping_nickname')->nullable()->index();
			$table->string('shipping_address')->nullable();
			$table->string('shipping_street')->nullable();
			$table->string('shipping_street_additional')->nullable();
			$table->string('shipping_city')->nullable();
			$table->string('shipping_state')->nullable();
			$table->string('shipping_country')->nullable()->default('United States');
			$table->string('shipping_zipcode', 10)->nullable();
			$table->string('shipping_latitude')->nullable();
			$table->string('shipping_longitude')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('shipping_addresses');
	}
}