<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketUserTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('ticket_user', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('ticket_id')->unsigned();
				$table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
				$table->integer('send_user_id')->unsigned();
				$table->foreign('send_user_id')->references('id')->on('users')->onDelete('cascade');
				$table->integer('receive_user_id')->unsigned();
				$table->foreign('receive_user_id')->references('id')->on('users')->onDelete('cascade');
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
				Schema::dropIfExists('ticket_user');
		}
}
