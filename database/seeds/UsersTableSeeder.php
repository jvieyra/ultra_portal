<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Student;
use App\Employee;
use App\Section;
use App\Department;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    	$date =  new Carbon();

      //create section and department
      $section =  Section::create([
        'name' => 'Root Section'
      ]);

      $section->save();

      $department = Department::create([
        'name' => ' Root Department'
      ]);
      $department->save();

      $department->sections()->attach($section);


     	$rootUser = User::create([
      	'name' => "Pablo",
      	'last_name'=> "Vieyra",
      	'second_last_name' => 'Lopez',
        'department_id' => $department->id,
      	'email' => 'vieyrapez@gmail.com',
        'nationality' => 'Mexicano',
      	'gender' => 'M',
      	'birthday' => $date->now(),
        'department_id'=> $department->id,
      	'password'=> bcrypt('123456'),
      ]);

      $rootUser->save();

      $roleRoot = Role::create([
        'name' => 'root',
        'display_name' => 'Root',
        'description' => 'Administrador completo del sitio'
      ]);

      $roleRoot->save();

      $employee = Employee::create([
        'user_id'=> $rootUser->id,
        'specific_position' => 'Techonology',
      ]);
      $employee->save();

      $rootUser->roles()->attach($roleRoot);


      $sectionElementary =  Section::create([
        'name' => 'Elementary'
      ]);

      $sectionElementary->save();

      $departmentD = Department::create([
        'name' => 'No asignable'
      ]);
      $departmentD->save();

      $departmentD->sections()->attach($sectionElementary);


      $studentUser = User::create([
        'name' => "John",
        'last_name'=> "Bonachon",
        'email' => 'student@student.itjvallereal.edu.mx',
        'nationality' => 'Mexicano',
        'gender' => 'M',
        'birthday' => $date->now(),
        'department_id'=> $department->id,
        'password'=> bcrypt('123456')
      ]);
      $studentUser->save();



      $teacherUser = User::create([
        'name' => "Jules",
        'last_name'=> "Winnfield",
        'email' => 'jules@gmail.com',
        'nationality' => 'Mexicano',
        'gender' => 'M',
        'birthday' => '1988-08-03',
        'department_id'=> 2,
        'password'=> bcrypt('123456')
      ]);
      $teacherUser->save();

      $employeeOne = Employee::create([
        'user_id'=> $teacherUser->id,
        'specific_position' => 'Docente',
      ]);
      $employeeOne->save();

      $teacherUserTwo = User::create([
        'name' => "Johnette",
        'last_name'=> "Napolitano",
        'email' => 'johnette@gmail.com',
        'nationality' => 'Mexicano',
        'gender' => 'F',
        'birthday' => '1990-05-25',
        'department_id'=> 2,
        'password'=> bcrypt('123456')
      ]);
      $teacherUserTwo->save();

      $employeeTwo = Employee::create([
        'user_id'=> $teacherUserTwo->id,
        'specific_position' => 'Docente',
      ]);
      $employeeTwo->save();

      $roleDocente = Role::create([
        'name' => 'docente',
        'display_name' => 'Docente',
        'description' => 'Usuario de tipo Docente'
      ]);

      $roleEstandar = Role::create([
        'name' => 'estandar',
        'display_name' => 'Estandar',
        'description' => 'Panel de vistas'
      ]);

      $studentUser->roles()->attach($roleEstandar);
      /*teacher 1*/
      $teacherUserTwo->roles()->attach($roleEstandar);
      $teacherUserTwo->roles()->attach($roleDocente);

      /*teacher 2*/

      $student = Student::create([
        'id'=>1,
        'user_id' => $studentUser->id,
        'homeroom' => '3A',
        'matricula' => '19-9991-1',
        'code' => '19-9991-1',
        'group' => 'A',
        'grade' => '3'
      ]);
      $student->save();

      $rolAdmin = Role::create([
        'name' => 'admin',
        'display_name' => 'Administrador',
        'description' => 'Administrador para usuarios'
      ]);
      $rolAdmin->save();

    }
}
