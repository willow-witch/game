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
        Schema::create('games_students', function (Blueprint $table) {
            $table->bigInteger("game_id")->unsigned()->nullable(false);
            $table->bigInteger("student_id")->unsigned()->nullable(false);

            $table->foreign('game_id')->references('id')->on('games')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('restrict');

            $table->primary(array('game_id', 'student_id'));
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
