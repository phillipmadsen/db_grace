<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	public function up()
	{
		Schema::create('tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('task');
			$table->string('priority')->nullable();
			$table->integer('assigned_to')->unsigned();
			$table->timestamp('completed_on')->nullable();
			$table->integer('created_by')->unsigned();
			$table->mediumInteger('order')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('tasks');
	}
}