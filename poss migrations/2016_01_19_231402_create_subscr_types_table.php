<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscrTypesTable extends Migration {

	public function up()
	{
		Schema::create('subscr_types', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('subsc_name')->index();
			$table->integer('subsc_term_months')->nullable();
			$table->integer('subs_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('subscr_types');
	}
}