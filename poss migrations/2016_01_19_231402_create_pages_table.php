<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration
{

    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('author_id')->unsigned();
                $table->string('title', 65)->index();
                $table->text('excerpt')->nullable();
                $table->text('content')->nullable();

                $table->string('slug')->nullable();
                $table->string('meta_title', 65)->nullable();
                $table->string('fb_title', 65)->nullable();
                $table->string('gp_title', 65)->nullable();
                $table->text('meta_description', 160)->nullable();
                $table->string('meta_keywords')->nullable();

                $table->integer('section_id')->unsigned();
                $table->integer('visits')->unsigned();
                $table->boolean('seen')->default(0);
                $table->boolean('is_published')->default(0);
                $table->string('page_path')->nullable();
                $table->string('menu_route')->nullable();


                $table->string('path', 255)->nullable();
                $table->string('file_name', 255)->nullable();
                $table->integer('file_size')->nullable();

                $table->boolean('has_product_link')->default(0);
                $table->boolean('product_link_nofollow')->default(0);
                $table->string('link_to_product_title')->nullable();
                $table->string('link_to_product')->nullable();

                $table->timestamps();
                $table->string('lang', 20);
                $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        $table = 'pages';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('pages');
    }
}
