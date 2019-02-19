<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
			'last_name' => 'required',
			'birthday' => 'required',
			'gender' => 'required',
			'nationality' => 'required',
			'specific_position' => 'required',
			'department_id' => 'required',
			'email' => 'email|required|unique:users,email',
			'password' => 'required',
			'roles' => 'required'

		];
	}
}
