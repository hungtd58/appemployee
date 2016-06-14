<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('verify/{confirm_code}', 'UserController@verify');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
	Route::group(['prefix' => 'department'],function(){
		Route::get('list',['as' => 'admin.department.list','uses' => 'DepartmentController@getList']);
		Route::get('add',['as' => 'admin.department.getAdd','uses' => 'DepartmentController@getAdd']);
		Route::post('add',['as' => 'admin.department.postAdd','uses' => 'DepartmentController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.department.getDelete','uses' => 'DepartmentController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.department.getEdit','uses' => 'DepartmentController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.department.postEdit','uses' => 'DepartmentController@postEdit']);
		Route::get('view/{id}',['as' => 'admin.department.getView','uses' => 'DepartmentController@getView']);
	});
	Route::group(['prefix' => 'employee'],function(){
		Route::get('list',['as' => 'admin.employee.list','uses' => 'EmployeeController@getList']);
		Route::get('add',['as' => 'admin.employee.getAdd','uses' => 'EmployeeController@getAdd']);
		Route::post('add',['as' => 'admin.employee.postAdd','uses' => 'EmployeeController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.employee.getDelete','uses' => 'EmployeeController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.employee.getEdit','uses' => 'EmployeeController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.employee.postEdit','uses' => 'EmployeeController@postEdit']);
	});
	Route::group(['prefix' => 'user'],function(){
		Route::get('list',['as' => 'admin.user.list','uses' => 'UserController@getList']);
		Route::get('add',['as' => 'admin.user.getAdd','uses' => 'UserController@getAdd']);
		Route::post('add',['as' => 'admin.user.postAdd','uses' => 'UserController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.user.getDelete','uses' => 'UserController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.user.getEdit','uses' => 'UserController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.user.postEdit','uses' => 'UserController@postEdit']);
		Route::post('reset',['as' => 'admin.user.postReset','uses' => 'UserController@postReset']);
	});
});