<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protection;
use App\Http\Requests;
use App\Permits;

class ProtectionController extends Controller
{
	
	public function index()
	{
		$protection = Protection::all();
		$tasks = Protection::all();
	}
	
	public function store(Request $request)
	{
		
		$this->validate($request, [
		'name'
		]);
		
		//$permits = Permits::('permitId')->with('permitId')->get();
		
		// $user->twitter_id = $credentials->id;
		//$tasks = Protection::create("1")->where('permitId', '=', "1")->first();
		
		$input = $request->all();
		$tasks = Protection::create($input);
		//return redirect()->back();
		return view('tasks/environment');
	}
	
}
