<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Protection extends Model
{
	
	public function protection()
	{
       // return $this->belongsTo('App\Permits', 'foreign_key', 'local_key');
	   // return $this->belongsTo('App\Permits', 'permitId', 'ProtectionId');
	   return $this->belongsTo('App\Permits');
		//$post = DB::table('protections')->where('permitId', '=', 1)->first();	   
	   
    }
	
	Protected $primaryKey = "protectionId";
	
	 protected $fillable = [
		'name',
		'protectionId',
		'permitId'
    ];
	
		  
	
}
