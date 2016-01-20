<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftwareAddonsTable extends Migration {

	public function up()
	{
		Schema::create('software_addons', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('soft_addon_id')->unsigned();
			$table->string('soft_addon_name')->nullable();
			$table->string('soft_addon_details')->nullable();
			$table->datetime('soft_addon_available');
			$table->string('soft_addon_status')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('software_addons');
	}
}