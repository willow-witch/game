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
        Schema::create('accessible_avatars', function (Blueprint $table) {
            $table->bigInteger("student_id")->unsigned()->nullable(false);
            $table->bigInteger("avatar_id")->unsigned()->nullable(false);

            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('avatar_id')->references('id')->on('avatars')->onUpdate('cascade')->onDelete('restrict');

            $table->primary(array('student_id', 'avatar_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessible_avatars');
    }
};
