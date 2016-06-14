<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	protected $table = 'departments';
	protected $fillable = ['name','office_phone','em_id'];
	public $timestamps = true;

	public function employee() {
		return $this->hasMany('App\Employee');
	}

}
