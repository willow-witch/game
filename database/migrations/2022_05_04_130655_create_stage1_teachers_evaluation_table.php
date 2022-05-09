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
        Schema::create('stage1_teachers_evaluation', function (Blueprint $table) {
            $table->bigInteger("teacher_id")->unsigned()->nullable(false);
            $table->bigInteger("criteria_id")->unsigned()->nullable(false);
            $table->tinyInteger("score");
            $table->timestamp("evaluation_date")->useCurrentOnUpdate();
            $table->boolean("active");

            $table->foreign('teacher_id')->references('id')->on('teachers')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('criteria_id')->references('id')->on('stage1_criteria')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage1_teachers_evaluation');
    }
};
