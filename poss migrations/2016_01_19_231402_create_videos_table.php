<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	public function up()
	{
		Schema::create('videos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 65)->index();
			$table->string('slug')->nullable();
			$table->string('video')->nullable();
			$table->string('video_url')->nullable();
			$table->string('youtube_video_url')->nullable();
			$table->string('type')->nullable()->default('youtube');
			$table->boolean('published')->default(0);
			$table->string('lang', 20)->nullable();
			$table->integer('category_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('videos');
	}
}