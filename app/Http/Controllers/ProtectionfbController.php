<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protectionfb;
use App\Http\Requests;

class ProtectionfbController extends Controller
{
	protected $protectionfb;
	
	public function index()
	{
		$protectionfb = Protectionfb::all();
		return response()->json($protectionfb);
	}
	
	public function store(Request $request)
	{	
		$input = $request->all();
		$protectionfb = Protectionfb::create($input);
		return view('tasks/feedback');
	}
	
	public function show($protectionId)
	{
		$protectionfb = Protectionfb::findOrFail($protectionId);
		return view('tasks/feedback')->withTask($protectionfb);
	}
	
}
