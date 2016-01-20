<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title')->nullable()->index();
			$table->string('slug')->nullable()->index();
			$table->text('excerpt')->nullable();
			$table->text('content')->nullable();
			$table->string('meta_keywords')->nullable()->index();
			$table->text('meta_description');
			$table->enum('status', array('NotSetYet', 'Draft', 'NeedsContent', 'NeedsImages', 'In4Review/Proof', 'Collaberate', 'Published', 'Archived'))->nullable()->index();
			$table->timestamp('published_on')->nullable()->index();
			$table->string('path')->nullable();
			$table->string('file_name')->nullable();
			$table->string('article_image')->nullable()->index();
			$table->string('image_at')->nullable();
			$table->boolean('is_published')->nullable()->index()->default(0);
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('meta_title', 65)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('articles');
	}
}