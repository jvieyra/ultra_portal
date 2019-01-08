<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePlanSubject extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('plan_subject', function (Blueprint $table) {
					$table->increments('id');
					$table->integer('plan_id')->unsigned();
					$table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
					$table->integer('subject_id')->unsigned();
					$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
					$table->integer('quota')->unsigned();
						
				});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
				Schema::dropIfExists('plan_subject');
		}
}
