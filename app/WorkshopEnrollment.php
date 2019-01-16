<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class WorkshopEnrollment extends Model {

	protected $fillable = ['matricula','subject_id','year_id'];
	protected $table = "workshop_enrollment";




}
