<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTempTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('workshops_temp', function (Blueprint $table) {
						$table->increments('id');
						$table->string('matricula');
						$table->foreign('matricula')->references('matricula')->on('students')->onDelete('cascade');
						$table->integer('subject_id')->unsigned();
						$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
						$table->integer('attempts');
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
				Schema::dropIfExists('workshops_temp');
		}
}
