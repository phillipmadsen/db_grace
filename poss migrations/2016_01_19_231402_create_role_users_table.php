<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUsersTable extends Migration {

	public function up()
	{
		Schema::create('role_users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('role_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('role_users');
	}
}