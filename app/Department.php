<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

  public function sections(){
		return $this->belongsToMany('App\Section');
	}
	
}
