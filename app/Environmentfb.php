<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Environmentfb extends Model
{
	
	Protected $primaryKey = "environmentId";
	
	 protected $fillable = [
		'feedback',
		'score',
		'permitId'
    ];
}
