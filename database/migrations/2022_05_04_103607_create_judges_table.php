<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judges', function (Blueprint $table) {
            $table->bigInteger("game_id")->unsigned()->nullable(false);
            $table->bigInteger("teacher_id")->unsigned()->nullable(false);
            $table->bigInteger("stage_id")->unsigned()->nullable(false);

            $table->foreign('game_id')->references('id')->on('games')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('stage_id')->references('id')->on('stages')->onUpdate('cascade')->onDelete('restrict');

            $table->primary(array('game_id', 'teacher_id', 'stage_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games_students');
    }
};
