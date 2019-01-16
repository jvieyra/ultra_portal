<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Year extends Model {

	public function getCurrentYear($year_id){
		$year = $this::find($year_id);
		return $year;
	}


	public function currentYear(){
		$year = $this::where('current_year','=',1)->get();
		return $year->first()->id;
	}

	public function isCurrentYear($year_id){
		$currentYear = $this->getCurrentYear($year_id);
		return ($currentYear->current_year == 1) ? true :false;
	}
}
