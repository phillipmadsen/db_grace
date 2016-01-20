<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShoppingcartSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('htmlschema')->default('itemscope itemtype="http://schema.org/Product"')->nullable();
            $table->string('model')->nullable();
            $table->string('sku')->nullable();
            $table->string('upc')->nullable();
            $table->string('slug')->nullable();
            $table->string('alias')->nullable();
            $table->string('product_image')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('product_short_description')->nullable();
            $table->text('product_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('price_currency')->nullable();
            $table->boolean('availability')->default(0);
            $table->float('price')->default(0);
            $table->text('galleries')->nullable();
            $table->integer('status')->default(1);
            $table->integer('quantity')->nullable();
            $table->string('weight')->nullable();
            $table->boolean('dimensions')->default(1);
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('shipping')->nullable();
            $table->string('product_location')->default('Grace Corporate');
            $table->string('manufacturer')->default('The Grace Company');
            $table->string('tax_class')->nullable();
            $table->string('tax_status')->nullable();
            $table->string('sale_price_coupon_code')->nullable();
            $table->string('sale_price_dates_to')->nullable();
            $table->string('sale_price_dates_from')->nullable();
            $table->string('stock_status')->nullable();
            $table->string('manage_stock')->nullable();
            $table->engine = 'InnoDB';
            $table->timestamps();
        });

        Schema::create('shop_product_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('offer_name');
            $table->boolean('availability')->default(0);
            $table->float('price')->default(0);
            $table->date('offer_starts')->nullable();
            $table->date('offer_ends')->nullable();
            $table->unsignedInteger('product_id');
            $table->string('price_currency')->default('USD');
            $table->integer('status')->default(0);
            $table->engine = 'InnoDB';
            $table->timestamps();
        });

        Schema::create('shop_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('parent_id')->default(0);
            $table->integer('order')->default(0);
            $table->integer('status')->default(1);
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

        $table = 'shop_products';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));

        $table = 'shop_categories';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));

        $table = 'shop_product_offers';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));

        Schema::drop('shop_products');
        Schema::drop('shop_categories');
        Schema::drop('shop_product_offers');
    }
}
