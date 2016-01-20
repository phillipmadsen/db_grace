<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration {

	public function up()
	{
		Schema::create('sliders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('description')->nullable();
			$table->string('path')->nullable();
			$table->string('file_name')->nullable();
			$table->integer('file_size');
			$table->integer('order');
			$table->string('lang', 20)->nullable();
			$table->integer('page_id')->unsigned();
			$table->integer('article_id')->unsigned();
			$table->integer('blog_post_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sliders');
	}
}