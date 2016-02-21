<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories_forum',function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('description')->nullable();
			});

		Schema::create('forums',function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->text('body');
			$table->integer('category_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('category_id')->references('id')->on('categories_forum');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forums',function(Blueprint $table){
			$table->dropForeign('forums_category_id_foreign');
			$table->dropForeign('forums_user_id_foreign');
		});
		Schema::drop('forums');
		Schema::drop('categories_forum');
	}

}
