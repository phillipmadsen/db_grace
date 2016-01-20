<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrivateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('private_settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('setting');
			$table->string('lang', 20);
		});
	}

	public function down()
	{
		Schema::drop('private_settings');
	}
}