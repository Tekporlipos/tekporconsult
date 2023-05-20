<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->string('admin');
            $table->string('category');
            $table->string('course');
            $table->string('title');
            $table->string('link');
            $table->string('author');
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
        Schema::dropIfExists('coures');
    }
}
