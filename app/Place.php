<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model {

  public function buildings(){
		return $this->belongsToMany('App\Building','place_building');
	}

}
