<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalerivideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerivideos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('videolink');
            $table->string('slider1', 12);
            $table->string('slider2', 12);
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
        Schema::drop('galerivideos');
    }
}
