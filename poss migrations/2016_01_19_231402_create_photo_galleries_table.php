<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotoGalleriesTable extends Migration {

	public function up()
	{
		Schema::create('photo_galleries', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 65);
			$table->string('slug')->nullable();
			$table->text('content');
			$table->string('meta_keywords')->nullable();
			$table->text('meta_description')->nullable();
			$table->integer('category_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('photo_galleries');
	}
}