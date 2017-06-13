<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
	
	Protected $primaryKey = "environmentId";
	
	 protected $fillable = [
		'name'
    ];
	
   // public function s/howPermit() {
	//	return $this->belongsTo('App\User', 'permits');
	//}
}
