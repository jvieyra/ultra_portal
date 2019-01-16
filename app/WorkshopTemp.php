<?php

namespace App;

use App\Subject;
use App\User;
use Illuminate\Database\Eloquent\Model;

class WorkshopTemp extends Model {

	 protected $fillable = [ 'matricula','subject_id',];

	 public function saveWorkshopsTemp($subjects, User $user){
	 	//guardar los workshops_temp-- agregarlo al modelo WorshopTemp;
      foreach($subjects as $subject){
      	$subject = Subject::find($subject);
      	$workshopTemp = new WorkshopTemp();
      	$workshopTemp->matricula = $user->student->code;
      	$workshopTemp->subject_id = $subject->id;
      	$workshopTemp->save();
      }

      return true;
	 }
}
