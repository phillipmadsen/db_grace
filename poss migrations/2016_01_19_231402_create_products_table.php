<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->datetime('available_on')->nullable()->index();
			$table->integer('product_info')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}