<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillingAddressesTable extends Migration
{

    public function up()
    {
        Schema::create('billing_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->string('billing_address')->nullable();
            $table->string('billing_nickname')->nullable()->index();
            $table->string('billing_street')->nullable();
            $table->string('billing_street_additional')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_zipcode', 10)->nullable();
            $table->string('billing_latitude')->nullable();
            $table->string('billing_longitude')->nullable();
        });
    }

    public function down()
    {
        $table = 'billing_addresses';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('billing_addresses');
    }
}
