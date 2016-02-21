<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publications',function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('subtitle');
			$table->text('body');
			$table->integer('user_id')->unsigned();
			$table->integer('subject_id')->unsigned();
			$table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('publications',function(Blueprint $table){
			$table->dropForeign('publications_user_id_foreign');
			$table->dropForeign('publications_subject_id_foreign');
		});
		Schema::drop('publications');
	}

}
