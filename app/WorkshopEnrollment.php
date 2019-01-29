<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class WorkshopEnrollment extends Model {

	protected $fillable = ['matricula','subject_id','plan_id','year_id'];
	protected $table = "workshop_enrollment";


	public function student(){
		return $this->belongsTo('App\Student');
	}

	


}
