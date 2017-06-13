<?php
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Protectionfb extends Model
{
	protected $table = 'protectionfbs';
	Protected $primaryKey = "protectionId";
	
	 protected $fillable = [
		'feedback',
		'score',
		'permitId'
    ];
}
