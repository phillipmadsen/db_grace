<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsPropertiesTable extends Migration {

	public function up()
	{
		Schema::create('products_properties', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('property')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('products_properties');
	}
}