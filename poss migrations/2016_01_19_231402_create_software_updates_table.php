<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftwareUpdatesTable extends Migration {

	public function up()
	{
		Schema::create('software_updates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('soft_update_id')->index();
			$table->datetime('issued_date');
			$table->string('update_name')->nullable();
			$table->string('update_url')->nullable();
			$table->string('update_package')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('software_updates');
	}
}