<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsOptionsValuesTable extends Migration {

	public function up()
	{
		Schema::create('products_options_values', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('option_value')->nullable();
			$table->integer('option_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('products_options_values');
	}
}