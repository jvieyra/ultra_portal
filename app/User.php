<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
		use Notifiable;

		protected $fillable = [
				'name', 'email', 'password','department_id','image'
		];

		protected $hidden = [
				'password', 'remember_token',
		];

		public function employees(){
			return $this->hasMany('App\Employee');
		}

		public function students(){
			return $this->hasMany('App\Student');
		}

		public function student(){
			return $this->hasOne('App\Student');
		}

		public function roles(){
			return $this->belongsToMany('App\Role');
		}

		public function hasRoles(array $roles){

			foreach($roles as $role){
				foreach($this->roles as $userRole){
					if($userRole->name === $role){
						return true;
					}
				}
			}

			return false;

		}

		public function department(){
			return $this->belongsTo('App\Department');
		}

		public function subjects(){
  		return $this->hasMany('App\Subject');
  	}


}
