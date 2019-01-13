<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;
use App\Student;

class StudentsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){

     $studentUser = User::create([
        'name' => "Mia",
        'last_name'=> "Wallace",
        'email' => 'mwallace@student.itjvallereal.edu.mx',
        'nationality' => 'Mexicano',
        'gender' => 'F',
        'birthday' => '2010-01-22',
        'department_id'=> 2,
        'password'=> bcrypt('123456')
      ]);
      $studentUser->save();

      $roleEstandar = Role::create([
        'name' => 'alumno',
        'display_name' => 'Alumno',
        'description' => 'Usuario de tipo alumno'
      ]);

      $studentUser->roles()->attach($roleEstandar);


      $student = Student::create([
        'id'=>2,
        'user_id' => $studentUser->id,
        'homeroom' => '5A',
        'matricula' => '13-0001-1',
        'code' => '13-0001-1',
        'group' => 'A',
        'grade' => '5'
      ]);

      $student->save();
  }
}
