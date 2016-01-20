<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsImagesTable extends Migration {

	public function up()
	{
		Schema::create('products_images', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image_path')->nullable();
			$table->string('image_alt')->nullable();
			$table->integer('product_variant_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('products_images');
	}
}