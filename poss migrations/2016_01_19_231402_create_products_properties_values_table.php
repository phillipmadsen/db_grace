<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsPropertiesValuesTable extends Migration {

	public function up()
	{
		Schema::create('products_properties_values', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('property_value')->nullable();
			$table->integer('prop_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('products_properties_values');
	}
}