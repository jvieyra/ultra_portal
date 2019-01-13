<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model {

	protected $table = 'plans';
	protected $primaryKey = 'id';

	public function students(){
		return $this->belongsToMany('App\Student','plan_student','plan_id','matricula')
								->withTimestamps();
	}

	public function subjects(){
		return $this->belongsToMany('App\Subject','plan_subject','plan_id','subject_id')
								->withPivot('id','plan_id','subject_id','quota');
	}
}
