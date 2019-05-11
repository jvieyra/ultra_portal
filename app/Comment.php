<?php

namespace App;


use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable = [
		'description','ticket_id','user_id'
	];

	

}
