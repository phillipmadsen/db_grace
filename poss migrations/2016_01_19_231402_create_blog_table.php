<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogTable extends Migration {

	public function up()
	{
		Schema::create('blog', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('blog');
	}
}