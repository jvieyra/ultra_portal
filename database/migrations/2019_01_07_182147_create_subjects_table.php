<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('workshop_id')->unsigned();
            $table->foreign('workshop_id')->references('id')->on('workshops')->onDelete('cascade');
            $table->string('name');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('year_id')->unsigned();
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
            $table->string('category');
            $table->string('gender');
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
        Schema::dropIfExists('subjects');
    }
}
