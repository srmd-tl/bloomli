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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('question');
            $table->string('hint')->nullable();

            $table->bigInteger('quiz_type_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('correct_option_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('quiz_type_id')->references('id')->on('quiz_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
