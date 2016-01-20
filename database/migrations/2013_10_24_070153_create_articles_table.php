<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('articles', function ($table) {

            $table->increments('id');
            $table->integer('author_id')->unsigned();

            $table->boolean('is_published')->default(true);
            $table->boolean('seen')->default(0);



            $table->string('title', 120);
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->string('slug')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('fb_title')->nullable();
            $table->string('gp_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();

            $table->string('path', 255)->nullable();
            $table->string('file_name', 255)->nullable();
            $table->integer('file_size')->nullable();

            $table->integer('category_id');
            $table->boolean('has_product_link')->default(0);
            $table->boolean('product_link_nofollow')->default(0);
            $table->string('link_to_product_title')->nullable();
            $table->string('link_to_product')->nullable();

            $table->string('lang', 20);
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table = 'articles';
            Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
            Schema::drop('articles');
    }
}
