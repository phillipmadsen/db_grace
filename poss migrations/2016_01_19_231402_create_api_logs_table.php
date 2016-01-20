<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiLogsTable extends Migration {

	public function up()
	{
		Schema::create('api_logs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('api_key_id')->unsigned()->nullable();
			$table->string('route')->nullable()->index();
			$table->string('method')->nullable()->index();
			$table->text('params')->nullable()->index();
			$table->string('ip_address')->nullable()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('api_logs');
	}
}