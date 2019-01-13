<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableWorkshopEnrollment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_enrollment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->foreign('matricula')->references('matricula')->on('students')->onDelete('cascade');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->integer('year_id')->unsigned();
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
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
        Schema::dropIfExists('workshop_enrollment');
    }
}
