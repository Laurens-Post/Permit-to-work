<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Environment;
use App\Http\Requests;

class EnvironmentController extends Controller
{
	
	public function index()
	{
		$protection = Protection::all();
		$tasks = Protection::all();
	}
	
	public function store(Request $request)
	{
		$this->validate($request, [
		'feedback',
		]);
		
		$input = $request->all();
		$tasks = Environment::create($input);
		//return redirect()->back();
		return view('tasks/precautions');
	}
	
}
