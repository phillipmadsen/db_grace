<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftwaresInstalledTable extends Migration {

	public function up()
	{
		Schema::create('softwares_installed', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('inst_soft_id')->unsigned();
			$table->string('device_one')->nullable()->index();
			$table->string('device_two')->nullable();
			$table->string('device_three')->unique()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('softwares_installed');
	}
}