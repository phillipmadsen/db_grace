<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailListTable extends Migration {

	public function up()
	{
		Schema::create('mail_list', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('email');
		});
	}

	public function down()
	{
		Schema::drop('mail_list');
	}
}