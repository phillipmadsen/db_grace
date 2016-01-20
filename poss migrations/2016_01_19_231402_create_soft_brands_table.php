<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftBrandsTable extends Migration {

	public function up()
	{
		Schema::create('soft_brands', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('code', 3)->unique();
			$table->string('brand_name')->unique();
			$table->integer('brand_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('soft_brands');
	}
}