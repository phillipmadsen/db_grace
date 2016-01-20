<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRemindersTable extends Migration {

	public function up()
	{
		Schema::create('reminders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->string('code');
			$table->boolean('completed')->default(0);
			$table->timestamp('completed_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('reminders');
	}
}