<?php

use Illuminate\Database\Seeder;

use App\Day;

class DaysTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
  	
  	$monday = Day::create([
      'name' => "Lunes"
    ]);
    $monday->save();

    $tuesday = Day::create([
      'name' => "Martes"
    ]);
    $tuesday->save();

    $wednesday = Day::create([
      'name' => "Miercoles"
    ]);
    $wednesday->save();

    $thursday = Day::create([
      'name' => "Jueves"
    ]);
    $thursday->save();

    $friday = Day::create([
      'name' => "Viernes"
    ]);
    $friday->save();
  }
}
