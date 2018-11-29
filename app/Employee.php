<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model{
  
  public function isEmployee($id){
  	return  $this->user_id === $id;
  }

}
