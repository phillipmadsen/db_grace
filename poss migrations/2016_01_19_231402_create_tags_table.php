<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {

	public function up()
	{
		Schema::create('tags', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('tag', 40);
			$table->string('slug')->nullable();
			$table->string('lang', 20)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('tags');
	}
}