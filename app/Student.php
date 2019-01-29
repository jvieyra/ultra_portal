<?php

namespace App;

use App\Plan;
use App\Workshop;
use App\Year;
use App\Subject;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Student extends Model {

	protected $table = 'students';
	protected $primaryKey = 'matricula';

	protected $fillable = [
		'user_id',
		'homeroom',
		'matricula',
		'code',
		'group',
		'grade'
	];


	public function plans(){
		return $this->belongsToMany('App\Plan','plan_student','matricula','plan_id')
									->withTimestamps();
	}

	public function plan(){
		return $this->belongsTo('');
	}

	//valida si el alumno ya esta inscrito en algun workshop
	public function workshopEnrollment(){
		$student = DB::table('workshop_enrollment')->where('matricula', $this->code)->first();

		return $student;
	}

	public function findStudentPlan(){
		$studentPlan = DB::table('plan_student')->where('matricula', $this->code)->first();
		//dd($studentPlan->plan_id);
		//dd($studentPlan);
		$plan = Plan::find($studentPlan->plan_id);
		return $plan->id;
	}

	//devuelve los wrokshop que el alumno puede elegir
	public function setWorkshops(){

		//$studentPlan = $this->plans->first()->id;
		//dd($this->code);
		$studentPlan = DB::table('plan_student')->where('matricula', $this->code)->first();
		//dd($studentPlan->plan_id);
		//dd($studentPlan);
		$plan = Plan::find($studentPlan->plan_id);
		//dd($plan->id);

		$year = new Year();
		//dd($plan->subjects);
		$workshops = collect();

		//regresa los planes de estudio del alumno
		//dd($plan->subjects);
		//foreach
		foreach($plan->subjects as $subject){


			$workshop = Workshop::find($subject->workshop_id);
			$sub = Subject::find($subject->id);

			$yearSubject = $subject->year_id;

			//si esta disponible y es del ciclo actual agregala

			//dd($sub->getQuota());
			if($sub->isAvailable($plan->id) && $year->isCurrentYear($subject->year_id)){
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


	//selecciona una clase de workshop

	public function selectWorkshop($subjects,$planID){
		$collection = collect([]);

		foreach($subjects as $subject){
			$sub = Subject::find($subject);
			if($sub->isAvailable($planID)){
				$collection->push($sub->id);
			}
		}

		if($collection->isEmpty()){
			return false;
		}else{
			return $subjectID = $collection->random();
		}

		
	}

}
