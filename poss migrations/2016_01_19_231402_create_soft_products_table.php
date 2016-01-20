<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftProductsTable extends Migration {

	public function up()
	{
		Schema::create('soft_products', function(Blueprint $table) {
			$table->increments('id');
			$table->softDeletes();
			$table->timestamps();
			$table->string('soft_product_code', 3)->unique();
			$table->string('soft_product_name')->index();
			$table->string('soft_product_type')->index();
			$table->integer('soft_prod_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('soft_products');
	}
}