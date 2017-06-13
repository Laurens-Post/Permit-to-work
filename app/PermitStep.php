<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermitStep extends Model
{
	 protected $table = "permit_steps";
     Protected $primaryKey = "stepId";
	
	 protected $fillable = [
		'danger'		
    ];
	
    //public function showPermit() {
	//	return $this->belongsTo('App\User', 'permits');
	//}
}
