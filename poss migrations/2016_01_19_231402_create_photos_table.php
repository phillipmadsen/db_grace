<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {

	public function up()
	{
		Schema::create('photos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('file_name');
			$table->string('title');
			$table->string('photo_path');
			$table->integer('file_size');
			$table->string('photo_type');
			$table->integer('relationship_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('photos');
	}
}