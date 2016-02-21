<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaCareerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_career', function (Blueprint $table) {
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->integer('career_id')->unsigned();
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
            $table->primary(['area_id', 'career_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area_career', function (Blueprint $table) {
            $table->dropForeign('area_career_area_id_foreign');
            $table->dropForeign('area_career_career_id_foreign');
        });
        Schema::drop('area_career');
    }
}
