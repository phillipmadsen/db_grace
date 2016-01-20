<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftwareFeaturesTable extends Migration {

	public function up()
	{
		Schema::create('software_features', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('feature_title')->nullable();
			$table->string('feature_desc')->nullable();
			$table->integer('software_feature_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('software_features');
	}
}