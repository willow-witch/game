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
        Schema::create('stage1_answers_students', function (Blueprint $table) {
            $table->bigInteger("question_id")->unsigned()->nullable(false);
            $table->bigInteger("answer_id")->unsigned()->nullable(false);
            $table->bigInteger("game_id")->unsigned()->nullable(false);
            $table->bigInteger("group_id")->unsigned()->nullable(false);
            $table->timestamp("answer_date");
            $table->boolean("active");

            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('game_id')->references('id')->on('games')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('question_id')->references('id')->on('stage1_questions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('answer_id')->references('id')->on('stage1_answers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage1_answers_students');
    }
};
