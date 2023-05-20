<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->text('description');
            $table->string('admin');
            $table->string('category');
            $table->string('course');
            $table->string('title');
            $table->integer('H');
            $table->integer('M');
            $table->integer('S');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizings');
    }
}
