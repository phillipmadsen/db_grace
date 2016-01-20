<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhotoGalleriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('photo_galleries', function ($table) {

            $table->increments('id');
            $table->string('title', 255);
            $table->string('slug')->nullable();
            $table->text('content');
            $table->timestamps();
            $table->boolean('is_published')->default(true);
            $table->engine = 'InnoDB';
            $table->string('lang', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table = 'photo_galleries';
            Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
         Schema::drop('photo_galleries');
    }
}
