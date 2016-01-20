<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostsTable extends Migration {

	public function up()
	{
		Schema::create('blog_posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('slider_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('blog_posts');
	}
}