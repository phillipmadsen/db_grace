<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersistencesTable extends Migration {

	public function up()
	{
		Schema::create('persistences', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->string('code')->unique();
		});
	}

	public function down()
	{
		Schema::drop('persistences');
	}
}