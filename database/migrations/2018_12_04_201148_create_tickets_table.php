<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up(){
				
			Schema::create('tickets', function (Blueprint $table) {

				$table->increments('id');
				$table->string('description');
				$table->datetime('send_datetime');
				$table->datetime('end_datetime');
				$table->string('avg_datetime');
				$table->integer('civil_protection');
				$table->integer('bind_ticket')->unsigned();
				$table->integer('status_id')->unsigned();
				$table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
				$table->string('solution');
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
		public function down(){

			Schema::dropIfExists('tickets');

		}
}
