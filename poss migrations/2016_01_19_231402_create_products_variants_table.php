<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsVariantsTable extends Migration {

	public function up()
	{
		Schema::create('products_variants', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('sku')->nullable()->index();
			$table->string('gtin')->nullable();
			$table->boolean('on_backorder')->nullable()->index()->default(0);
			$table->boolean('on_hand')->nullable()->index()->default(0);
			$table->boolean('available_on_demand')->nullable()->index()->default(0);
			$table->decimal('weight', 8,2)->nullable()->default('00.00');
			$table->decimal('width', 8,2)->nullable()->default('00.00');
			$table->decimal('height', 8,2)->nullable()->default('00.00');
			$table->string('depth', 8,2)->nullable()->default('00.00');
			$table->integer('product_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('products_variants');
	}
}