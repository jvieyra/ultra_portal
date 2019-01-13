<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaySubjectTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('day_subject', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('subject_id')->unsigned();
			$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
			$table->integer('day_id')->unsigned();
			$table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
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
		Schema::dropIfExists('day_subject');
	}
}
