<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model {
 	protected $table = 'subjects';
	protected $primaryKey = 'id';

	/* relations methods*/
	public function plans(){
		return $this->belongsToMany('App\Plan','plan_subject','subject_id','plan_id');
	}

	public function days(){
		return $this->belongsToMany('App\Day','day_subject','subject_id','day_id');
	}

	/* relations methods*/


	/* logic methods */

	//cuenta cuantos alumnos estan ya inscritos a la clase
	public function countSubjEnroll(){
		return  $countSubj = DB::table('workshop_enrollment')
																	->where('subject_id', $this->id)
																	->get()
																	->count();
	}

	//regresa el cupo por subject creado
	public function getQuota(){
		return $quota = DB::table('plan_subject')
															->where('subject_id',$this->id)
															->select('quota')
															->get()->toArray();
	}

	//valida si hay cupo disponible
	public function isAvailable(){
		$quota = $this->getQuota();
		$quota = $quota[0]->quota;
		if($this->countSubjEnroll() >= $quota){
			return false;
		}

		return true;
	}

	//regresa los dias del subject
	public function subjectDays(){
		$days = $this->days->implode('name','-');
		return $days;
	}


	/* logic methods */



}
