<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiKeysTable extends Migration {

	public function up()
	{
		Schema::create('api_keys', function(Blueprint $table) {
			$table->increments('id');
			$table->string('key', 40)->unique()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->smallInteger('level')->nullable();
			$table->boolean('ignore_limits')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('api_keys');
	}
}