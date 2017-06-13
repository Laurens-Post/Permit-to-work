<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Permits extends Model
{
	Protected $primaryKey = "permitId";
	
	 protected $fillable = [
		'permitName',
        'type',
		'workDescription'
    ];
	
	public function permits() {
		return $this->hasMany('App\Protection');
	}
	
   // public function s/howPermit() {
	//	return $this->belongsTo('App\User', 'permits');
	//}
}
