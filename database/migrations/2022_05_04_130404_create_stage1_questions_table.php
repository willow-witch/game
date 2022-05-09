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
        Schema::create('stage1_questions', function (Blueprint $table) {
            $table->id();
            $table->string("question", 60);
            $table->bigInteger("type")->unsigned()->nullable(false);
            $table->boolean("active");

            $table->foreign('type')->references('id')->on('question_type')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage1_questions');
    }
};
