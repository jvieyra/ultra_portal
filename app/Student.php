<?php

namespace App;

use App\Plan;
use App\Workshop;
use App\Year;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Student extends Model {

	protected $table = 'students';
	protected $primaryKey = 'matricula';

	protected $fillable = [
		'homeroom',
		'matricula',
		'group',
		'grade'
	];


	public function plans(){
		return $this->belongsToMany('App\Plan','plan_student','matricula','plan_id')
									->withTimestamps();
	}

	//valida si el alumno ya esta inscrito en algun workshop
	public function workshopEnrollment(){
		return $student = DB::table('workshop_enrollment')->where('matricula', $this->matricula)->first();
	}

	//devuelve los wrokshop que el alumno puede elegir
	public function setWorkshops(){
		$studentPlan = $this->plans->first()->id;
		//dd($studentPlan);
		$plan = Plan::find($studentPlan);
		$year = new Year();
		//dd($plan->subjects);
		$workshops = collect();

		//regresa los planes de estudio del alumno
		
		//foreach
		foreach($plan->subjects as $subject){
			$workshop = Workshop::find($subject->workshop_id);
			$yearSubject = $subject->year_id;
			//si esta disponible y es del ciclo actual agregala
			if($subject->isAvailable() && $year->isCurrentYear($subject->year_id)){
				$workshops->push([
					'id'=> $subject->id,
					'name'=> $workshop->name,
					'start_time' => $subject->start_time,
					'end_time' => $subject->end_time,
					'description' => $workshop->description,
					'days' => $subject->subjectDays(),
					'picture'=> $workshop->picture
				]);
			}

		}

		return $workshops;
	}

}
