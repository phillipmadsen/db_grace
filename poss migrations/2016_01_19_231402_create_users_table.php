<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username')->nullable()->index();
			$table->string('email')->unique();
			$table->string('avatar')->nullable();
			$table->string('password');
			$table->string('name')->nullable()->index();
			$table->string('slug')->nullable();
			$table->text('permissions')->nullable();
			$table->string('ip')->nullable()->index();
			$table->integer('user_role');
			$table->boolean('activated')->nullable()->index()->default(0);
			$table->boolean('remember')->nullable()->index()->default(0);
			$table->string('remember_token')->nullable();
			$table->boolean('is_fake')->nullable()->index();
			$table->timestamp('verified_on')->nullable();
			$table->timestamp('active_on')->nullable();
			$table->boolean('confirmed')->nullable()->index()->default(0);
			$table->timestamp('activated_at')->nullable()->index();
			$table->boolean('published')->nullable()->index()->default(0);
			$table->timestamp('published_on')->nullable()->index();
			$table->timestamp('last_login')->nullable()->index();
			$table->timestamp('blocked_on')->nullable();
			$table->integer('address_id')->unsigned();
			$table->integer('article_id')->unsigned()->index();
			$table->integer('billing_id')->unsigned();
			$table->integer('profile_id')->unsigned();
			$table->integer('software_id')->unsigned()->index();
			$table->integer('shipping_id')->unsigned();
			$table->boolean('is_employee')->nullable()->index()->default(0);
			$table->integer('task_id')->unsigned();
			$table->integer('employee_hr_id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->integer('page_id')->unsigned();
			$table->integer('group_id');
			$table->integer('prefered_language');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}