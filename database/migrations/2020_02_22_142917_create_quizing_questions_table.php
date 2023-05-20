<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizingQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizing_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('quizing_id');
            $table->text('question');
            $table->text('option1');
            $table->integer('option1_code');
            $table->text('option2');
            $table->integer('option2_code');
            $table->text('option3');
            $table->integer('option3_code');
            $table->text('option4');
            $table->integer('option4_code');
            $table->text('option5');
            $table->integer('option5_code');
            $table->text('solution');
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
        Schema::dropIfExists('quizing_questions');
    }
}
