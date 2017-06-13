<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Precautions;
use App\Http\Requests;

class PrecautionsController extends Controller
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
		$tasks = Precautions::create($input);
		//return redirect()->back();
		return view('tasks/feedback');
	}
	
}
