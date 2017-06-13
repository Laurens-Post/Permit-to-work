<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Precautions extends Model
{
	
	Protected $primaryKey = "precautionsId";
	
	 protected $fillable = [
		'name'
    ];
	
   // public function s/howPermit() {
	//	return $this->belongsTo('App\User', 'permits');
	//}
}
