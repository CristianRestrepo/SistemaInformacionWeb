<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Comentarios foros
		Schema::create('comment_forums', function($table) {
			$table->increments('id');
			$table->string('comment');
			$table->integer('forum_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('forum_id')->references('id')->on('forums')->onDelete('cascade');
			$table->timestamps();
		});

			//Comentarios publicaciones
			Schema::create('comment_publications', function($table) {
				$table->increments('id');
				$table->string('comment');
				$table->integer('publication_id')->unsigned();
				$table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
				$table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
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
		$tab = ['comment_forums','comment_publications'];

		Schema::table('comment_forums', function (Blueprint $table) {
			$table->dropForeign('comment_forums_user_id_foreign');
			$table->dropForeign('comment_forums_forum_id_foreign');
		});

		Schema::table('comment_publications', function (Blueprint $table) {
			$table->dropForeign('comment_publications_user_id_foreign');
			$table->dropForeign('comment_publications_publication_id_foreign');
		});

		foreach($tab as $t)
			Schema::drop($t);
	}

}
