<?php namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\DepartmentRequest;
use App\Department;
use Auth;

class DepartmentController extends Controller {

	public function getList() {
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$data = Department::select('id','name','office_phone','em_id')->orderBy('name','ASC')->get()->toArray();
		return view('admin.department.list',compact('data'));
	}

	public function getAdd() {
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$data = Employee::select('id','name','depart_id')->get()->toArray();
		return view('admin.department.add',compact('data'));
	}

	public function postAdd(DepartmentRequest $request) {
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$depart = new Department();
		$depart->name = $request->txtName;
		$depart->office_phone = $request->txtPhone;
		$depart->em_id = $request->txtManager;
		$depart->save();
		return redirect()->route('admin.department.list')->with(['flash_message' => 'Success! Complete add department']);
	}

	public function getDelete($id) {
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$depart = Department::find($id);
		$depart->delete($id);
		return redirect()->route('admin.department.list')->with(['flash_message' => 'Success! Complete delete department']);
	}

	public function getEdit($id) {
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$emp = Employee::select('id','name','depart_id')->get()->toArray();
		$data = Department::find($id)->toArray();
		return view('admin.department.edit',compact('data','id','emp'));
	}

	public function postEdit(Request $request,$id) {
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$this->validate($request,
			[
				"txtName" => "required",
				"txtPhone" => "required"
			]
		);
		$depart = Department::find($id);
		$depart->name = $request->txtName;
		$depart->office_phone = $request->txtPhone;
		$depart->em_id = $request->txtManager;
		$depart->save();
		return redirect()->route('admin.department.list')->with(['flash_message' => 'Success! Complete edit department']);
	}

	public function getView($id) {
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$data = Employee::select('id','name','job_title','email')->where('depart_id','=',$id)->get()->toArray();
		return view('admin.department.view',compact('data'));
	}
}
