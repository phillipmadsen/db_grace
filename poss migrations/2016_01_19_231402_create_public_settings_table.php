<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicSettingsTable extends Migration {

	public function up()
	{
		Schema::create('public_settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('setting')->nullable();
			$table->string('lang', 20);
		});
	}

	public function down()
	{
		Schema::drop('public_settings');
	}
}