<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHrTable extends Migration
{

    public function up()
    {
        Schema::create('hr', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('employee_number')->unique()->nullable();
            $table->integer('salary')->nullable()->index();
            $table->string('position')->nullable()->index();
            $table->string('jobtitle')->nullable()->index();
            $table->string('supervisor')->nullable()->index();
            $table->date('hire_date')->nullable()->index();
            $table->string('termination_date')->nullable()->index();
            $table->smallInteger('hourly_rate')->nullable()->index();
            $table->string('department')->nullable()->index();
            $table->integer('user_id')->unsigned();
            $table->enum('employment_status', array('ActiveFull-Time', 'ActivePart-time', 'OnContract', 'OnLeave', 'Terminated'))->nullable();
            $table->string('employment_roles')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        $table = 'hr';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('hr');
    }
}
