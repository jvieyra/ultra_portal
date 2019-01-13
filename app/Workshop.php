<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model {
  
  public function subjects(){
  	return $this->hasMany('App\Subject');
  }

}
