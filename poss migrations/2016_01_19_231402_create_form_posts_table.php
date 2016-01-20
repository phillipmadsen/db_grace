<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormPostsTable extends Migration {

	public function up()
	{
		Schema::create('form_posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('sender_name_surname');
			$table->string('sender_email');
			$table->string('sender_phone_number');
			$table->string('subject');
			$table->text('message');
			$table->string('created_ip');
			$table->boolean('is_answered')->default(00);
			$table->string('lang', 20);
		});
	}

	public function down()
	{
		Schema::drop('form_posts');
	}
}