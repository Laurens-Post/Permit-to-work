<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\v1\PermitService;
use App\Environment;

class EnvironmentController extends Controller
{
	protected $environment;
    public function __construct(PermitService $service) {
		$this->environment = $service;
}

	public function index()
	{
		$dannick = Environment::all();
		return response()->json($dannick);
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$dannick = Environment::create($input);
		return $dannick;
	}
	
	public function show($environmentId)
	{
		$dannick = Environment::findOrFail($environmentId);
		return view('v1/environment')->withTask($dannick);
	}
	
	public function edit($protectionId)
	{
		$dannick = Environment::findOrFail($environmentId);
	}
	
	public function update($protectionId, Request $request)
	{
		$dannick = Environment::findOrFail($environmentId);
		$input = $request->all();
		$dannick->fill($input)->save();
		return redirect()->back();
	}

	public function destroy($protectionId) 
	{
		$dannick = Environment::findOrFail($environmentId);
		$dannick->delete();
	}
		
}