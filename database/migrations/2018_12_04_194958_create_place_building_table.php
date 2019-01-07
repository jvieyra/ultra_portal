<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceBuildingTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('place_building', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('place_id')->unsigned();
				$table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
				$table->integer('building_id')->unsigned();
				$table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade');
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
				Schema::dropIfExists('place_building');
		}
}
