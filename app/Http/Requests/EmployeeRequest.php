<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployeeRequest extends Request {

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
			'txtDepartment' =>      'required',
			'txtName'       =>      'required',
			'fImage'        =>      'required|image',
			'txtJobTitle'   =>      'required',
			'txtCellPhone'  =>      'required|numeric',
			'txtEmail'      =>      'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
		];
	}
}
