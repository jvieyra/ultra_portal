<?php

use Illuminate\Database\Seeder;

use App\Subject;

class SubjectsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
  	$tenis = Subject::create([
  		'user_id' => 3,
  		'workshop_id' =>1,
  		'name' => 'Elementary 2º y 3º',
  		'start_time' => '11:40:00',
  		'end_time' => '12:40:00',
  		'year_id'=> 2,
  		'category'=>'0000',
  		'gender'=> 'A'
  	]);

  	$tenis->save();

  	$flamenco = Subject::create([
  		'user_id' => 4,
  		'workshop_id' => 2,
  		'name' => 'Elementary 2º y 3º',
  		'start_time' => '11:40:00',
  		'end_time' => '12:40:00',
  		'year_id'=> 2,
  		'category'=>'0000',
  		'gender'=> 'A'
  	]);

  	$flamenco->save();


  	$flamencoA = Subject::create([
  		'user_id' => 4,
  		'workshop_id' => 2,
  		'name' => 'Elementary 4º y 5º',
  		'start_time' => '12:20:00',
  		'end_time' => '13:20:00',
  		'year_id'=> 2,
  		'category'=>'0000',
  		'gender'=> 'A'
  	]);

  	$flamencoA->save();

  	$futbol = Subject::create([
  		'user_id' => 3,
  		'workshop_id' => 3,
  		'name' => 'Middle School 6º a 9º',
  		'start_time' => '13:45:00',
  		'end_time' => '14:45:00',
  		'year_id'=> 2,
  		'category'=>'0000',
  		'gender'=> 'A'
  	]);

  	$futbol->save();


  }
}
