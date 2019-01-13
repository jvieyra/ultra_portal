<?php

use Illuminate\Database\Seeder;

use App\Plan;

class PlanTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
  	//Third
  	$planThirdA = Plan::create([
  		'name'=> 'Elementary 3A',
  		'alias'=> 'E3A'
  	]);
  	$planThirdA->save();

  	$planThirdB = Plan::create([
  		'name'=> 'Elementary 3B',
  		'alias'=> 'E3B'
  	]);
  	$planThirdB->save();

  	//Fifth
  	$planFifthA = Plan::create([
  		'name'=> 'Elmentary 5A',
  		'alias' => 'E5A'
  	]);
  	$planFifthA->save();

  	$planFifthB = Plan::create([
  		'name'=> 'Elmentary 5B',
  		'alias' => 'E5B'
  	]);
  	$planFifthB->save();


  	//nineth
  	$planNinethB = Plan::create([
  		'name'=> 'Middle School 9B',
  		'alias' => 'MS9B'
  	]);
  	$planNinethB->save();

  }
}
