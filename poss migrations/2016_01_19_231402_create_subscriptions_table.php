<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubscriptionsTable extends Migration {

	public function up()
	{
		Schema::create('subscriptions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->enum('subscr_active', array(''))->index();
			$table->integer('subs_id')->unsigned();
			$table->integer('renew_every')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('subscriptions');
	}
}