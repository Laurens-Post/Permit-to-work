<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Precautionfb extends Model
{
	
	Protected $primaryKey = "precautionId";
	
	 protected $fillable = [
		'feedback',
		'score',
		'permitId'
    ];
}
