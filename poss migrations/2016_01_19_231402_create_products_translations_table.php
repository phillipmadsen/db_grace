<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTranslationsTable extends Migration {

	public function up()
	{
		Schema::create('products_translations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product_id')->unique()->unsigned();
			$table->string('slug')->nullable();
			$table->string('name');
			$table->text('short_description')->nullable();
			$table->text('description')->nullable();
			$table->string('meta_keywords')->nullable();
			$table->string('meta_description', 160)->nullable();
			$table->string('htmlschema')->nullable()->default('product');
			$table->string('bodyschema')->nullable();
			$table->string('locale')->unique()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('products_translations');
	}
}