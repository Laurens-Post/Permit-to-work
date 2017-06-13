<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\v1\PermitService;
use App\Permits;

class PermitController extends Controller
{
	protected $permits;
    public function __construct(PermitService $service) {
		$this->permits = $service;
}

	public function index()
	{
		$data = $this->permits->getPermits();
		$dannick = Permits::all();
		return response()->json($data);
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$data = Permits::create($input);
	}
	
	public function show($permitId)
	{
		$dannick = Permits::findOrFail($permitId);
		return view('tasks/show')->withTask($dannick);
	}
	
	public function edit($permitId)
	{
		$dannick = Permits::findOrFail($permitId);
	}
	
	public function update($permitId, Request $request)
	{
		$dannick = Permits::findOrFail($permitId);
		$input = $request->all();
		$dannick->fill($input)->save();
		return redirect()->back();
	}

	public function destroy($permitId) 
	{
		$dannick = Permits::findOrFail($permitId);
		$dannick->delete();
	}
		
}