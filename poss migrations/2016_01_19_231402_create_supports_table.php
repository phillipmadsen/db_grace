<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupportsTable extends Migration {

	public function up()
	{
		Schema::create('supports', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('ticket')->index();
			$table->string('subject')->nullable()->index();
			$table->string('department')->nullable()->index();
			$table->text('content')->nullable();
			$table->integer('assigned_to')->unsigned()->nullable();
			$table->string('status')->nullable()->index();
			$table->boolean('read')->nullable()->index()->default(0);
		});
	}

	public function down()
	{
		Schema::drop('supports');
	}
}