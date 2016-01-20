<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageSectionsTable extends Migration {

	public function up()
	{
		Schema::create('page_sections', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('section_title', 55);
			$table->text('section_content');
			$table->string('section_image')->nullable();
			$table->enum('section_image_type', array('top-full', 'left-indent', 'right-indent', 'none'));
		});
	}

	public function down()
	{
		Schema::drop('page_sections');
	}
}