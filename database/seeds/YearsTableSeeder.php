<?php

use Illuminate\Database\Seeder;

use App\Year;

class YearsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
  	
  	$pastYear = Year::create([
  		'year' => '2017-2018',
  		'current_year' => 0
  	]);
  	$pastYear->save();
  	
  	$year = Year::create([
  		'year' => '2018-2019',
  		'current_year' => 1
  	]);
  	$year->save();
  }
}
