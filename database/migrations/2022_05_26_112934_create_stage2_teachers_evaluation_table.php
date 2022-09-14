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
        Schema::create('stage2_teachers_evaluation', function (Blueprint $table) {
            $table->bigInteger("answer_id")->unsigned()->nullable(false);
            $table->bigInteger("teacher_id")->unsigned()->nullable(false);
            $table->bigInteger("group_id")->unsigned()->nullable(false);
            $table->tinyInteger("score");
            $table->timestamp("evaluation_date")->useCurrentOnUpdate();
            $table->boolean("active");

            $table->foreign('teacher_id')->references('id')->on('teachers')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('answer_id')->references('id')->on('stage2_answers_students')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage2_teachers_evaluation');
    }
};
