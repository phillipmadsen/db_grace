<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivationsTable extends Migration {

	public function up()
	{
		Schema::create('activations', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('code');
			$table->timestamps();
			$table->boolean('completed')->default(0);
			$table->timestamp('completed_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('activations');
	}
}