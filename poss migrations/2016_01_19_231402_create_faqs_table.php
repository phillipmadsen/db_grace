<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqsTable extends Migration {

	public function up()
	{
		Schema::create('faqs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('question')->index();
			$table->text('answer')->nullable()->index();
			$table->integer('order')->nullable();
			$table->string('lang', 20)->nullable();
			$table->integer('answered_by')->unsigned();
			$table->integer('asked_by')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('faqs');
	}
}