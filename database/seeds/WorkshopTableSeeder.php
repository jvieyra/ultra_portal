<?php

use Illuminate\Database\Seeder;
use App\Workshop;


class WorkshopTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
  	
  	$tenis = Workshop::create([
  		'name' => 'Tenis',
  		'description' => 'Taller Deporte Tenis',
  		'picture' => 'tenis.jpg'
  	]);
  	$tenis->save();

  	$flamenco = Workshop::create([
  		'name' => 'Flamenco',
  		'description' => 'Taller cultural de Flamenco',
  		'picture' => 'flamenco.jpg'
  	]);
  	$flamenco->save();

  	$futbol = Workshop::create([
  		'name' => 'Futbol',
  		'description' => 'Taller deportivo de futbol',
  		'picture' => 'futbol.jpg'
  	]);
  	$futbol->save();


  }
}
