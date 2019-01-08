<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePlanStudent extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('plan_student', function (Blueprint $table) {
					$table->increments('id');
					$table->integer('plan_id')->unsigned();
					$table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
					$table->string('matricula');
					$table->foreign('matricula')->references('matricula')->on('students')->onDelete('cascade');
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
				Schema::dropIfExists('plan_student');
		}
}
