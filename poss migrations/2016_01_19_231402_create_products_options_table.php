<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsOptionsTable extends Migration {

	public function up()
	{
		Schema::create('products_options', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('option_name')->nullable();
			$table->integer('product_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('products_options');
	}
}