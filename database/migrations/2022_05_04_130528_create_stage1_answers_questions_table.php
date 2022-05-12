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
        Schema::create('stage1_answers_questions', function (Blueprint $table) {
            $table->bigInteger("question_id")->unsigned()->nullable(false);
            $table->bigInteger("answer_id")->unsigned()->nullable(false);

            $table->foreign('question_id')->references('id')->on('stage1_questions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('answer_id')->references('id')->on('stage1_answers')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(array('question_id', 'answer_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage1_answers_questions');
    }
};
