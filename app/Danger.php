<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Danger extends Model
{
	
	Protected $primaryKey = "stepId";
	
	 protected $fillable = [
        'danger'
    ];
	
   // public function s/howPermit() {
	//	return $this->belongsTo('App\User', 'permits');
	//}
}
