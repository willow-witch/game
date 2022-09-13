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
        Schema::create('stage2_answers_students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("question_id")->unsigned()->nullable(false);
            $table->string('answer', 500);
            $table->bigInteger('game_id')->unsigned()->nullable(false);
            $table->bigInteger("group_id")->unsigned()->nullable(false);
            $table->timestamp("answer_date");
            $table->boolean("active");

            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('game_id')->references('id')->on('games')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('question_id')->references('id')->on('stage2_questions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage2_answers_students');
    }
};
