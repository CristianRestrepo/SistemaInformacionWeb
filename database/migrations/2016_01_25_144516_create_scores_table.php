<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scores',function(Blueprint $table){
			$table->increments('id');
			$table->string('value');
			$table->integer('score');
			$table->integer('publication_id')->unsigned();
			$table->timestamps();
			$table->foreign('publication_id')->references('id')->on('publications');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('scores',function(Blueprint $table){
			$table->dropForeign('scores_publication_id_foreign');
		});
		Schema::drop('scores');
	}

}
