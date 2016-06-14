<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Hash;
use Mail;
use Auth;

class UserController extends Controller {

	public function getList(){
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$data = User::select('id','username','password','email')->where('active', 1)->get()->toArray();
		return view('admin.user.list',compact('data'));
	}

	public function getAdd(){
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		return view('admin.user.add');
	}

	public function postAdd(UserRequest $request){
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		Mail::send('emails.verify', array('firstname'=> $request->txtUser), function($message){
        	$message->to(Input::get('txtEmail'), Input::get('txtUser'))->subject('Active your account');
    	});
		$user = new User();
		$user->username = $request->txtUser;
		$user->password = Hash::make($request->txtPass);
		$user->email = $request->txtEmail;
		$user->remember_token = $request->_token;
		$user->save();
		
		return redirect()->route('admin.user.list')->with(['flash_level' => 'success','flash_message' => 'Complete add user']);
	}

	public function getDelete($id){
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$user = User::find($id);
		$user->delete($id);
		return redirect()->route('admin.user.list')->with(['flash_level' => 'success','flash_message' => 'Complete delete user']);
	}

	public function getEdit($id){
		if(!Auth::user()->resetpass){
			return view("admin.user.reset");
		}
		$data = User::find($id)->toArray();
		return view('admin.user.edit',compact('data'));
	}

	public function postEdit($id,Request $request){
		if(!Auth::user()->resetpass){
			return view("admin.reset");
		}
		$this->validate($request,[
			'txtPass'       =>      'required|min:8',
			'txtRePass'     =>      'required|same:txtPass',
			//'txtEmail'      =>      'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
		]);
		$user = User::find($id);
		$user->password = Hash::make($request->txtPass);
		$user->save();
		return redirect()->route('admin.user.list')->with(['flash_level' => 'success','flash_message' => 'Complete add user']);
	}

	public function getReset(){
		return view('admin.user.reset');
	}

	public function postReset(Request $request){
		$this->validate($request,[
			'txtNewPass'       =>      'required|min:8',
			'txtRePass'        =>      'required|same:txtNewPass',
		]);
		$username = $request->txtUser;
		$user = User::where('username','=',$username)->get();
		if($user != '') echo "aloo";
	}
}
