<?php

namespace App;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {
  
  protected $fillable = [
		'description','send_datetime','end_datetime',
		'avg_datetime','civil_protection','bind_ticket',
		'status_id','solution','year_id'
	];


	public function users(){
    return $this->belongsToMany('App\User','ticket_user','ticket_id','send_user_id')
    						->withPivot('receive_user_id');
  }

  public function categories(){
    return $this->belongsToMany('App\Category','ticket_category');
  }


  public function getCreatedAtAttribute($date){
  	return new Date($date);
  }

  
	
		
}
