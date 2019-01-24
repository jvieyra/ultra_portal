<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model {

	protected $fillable = ['name','description','picture'];
  
  public function subjects(){
  	return $this->hasMany('App\Subject');
  }

}
