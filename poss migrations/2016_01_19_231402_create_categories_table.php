<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('category', 65)->index();
			$table->text('category_description')->nullable();
			$table->string('category_image')->nullable();
			$table->string('slug')->nullable();
			$table->integer('photo_gallery_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}