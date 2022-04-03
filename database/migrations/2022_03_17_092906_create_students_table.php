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
        Schema::create('students', function (Blueprint $table) {
            $table->bigInteger("id")->unsigned()->nullable(false);
            $table->string("first_name", 20);
            $table->string("last_name", 20);
            $table->bigInteger("school_id")->unsigned();
            $table->string("photo", 50);
            $table->bigInteger("current_avatar_id")->unsigned();

            $table->foreign('school_id')->references('id')->on('schools')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('current_avatar_id')->references('id')->on('avatars')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
