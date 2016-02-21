<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Personas
		Schema::create('file_publications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('publication_id')->unsigned();
			$table->string('name');
			$table->string('path');
			$table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
			$table->timestamps();
		});

		//Empresas
		Schema::create('file_forums', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('forum_id')->unsigned();
			$table->string('name');
			$table->string('path');
			$table->foreign('forum_id')->references('id')->on('forums')->onDelete('cascade');
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
		$tab = ['file_publications','file_forums'];

		Schema::table('file_publications', function (Blueprint $table) {
			$table->dropForeign('file_publications_publication_id_foreign');
		});

		Schema::table('file_forums', function (Blueprint $table) {
			$table->dropForeign('file_forums_forum_id_foreign');
		});

		foreach($tab as $t)
			Schema::drop($t);
	}

}
