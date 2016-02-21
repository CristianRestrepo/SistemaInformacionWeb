<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('code');
			$table->date('birth')->nullable();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->integer('phone')->nullable();
			$table->integer('mphone')->nullable();
			$table->integer('department_id')->unsigned();
			$table->string('image_path')->nullable();
			$table->string('image_name')->nullable();
			$table->timestamps();
			$table->foreign('department_id')->references('id')->on('departments');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users',function(Blueprint $table){
			$table->dropForeign('users_department_id_foreign');
		});

		Schema::drop('users');
	}

}
