<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

	protected $table = 'employees';
	protected $fillable = ['name','office_phone','image','job_title','email','depart_id'];
	public $timestamps = false;

	public function department() {
		return $this->belongsTo('App\Department');
	}

}
