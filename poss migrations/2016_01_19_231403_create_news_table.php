<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 65);
			$table->text('news_content')->nullable();
			$table->string('slug')->nullable();
			$table->datetime('datetime');
			$table->boolean('is_published')->default(0);
			$table->string('path')->nullable();
			$table->string('file_name')->nullable();
			$table->string('file_size')->nullable();
			$table->string('lang', 20)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}