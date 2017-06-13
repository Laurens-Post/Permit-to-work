<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\v1\PermitService;
use App\Environmentfb;

class EnvironmentfbController extends Controller
{
	protected $environmentfb;

	public function index()
	{
		$dannick = Environmentfb::all();
		return response()->json($dannick);
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$dannick = Environmentfb::create($input);
		return $dannick;
	}
	
	public function show($environmentId)
	{
		$dannick = Environmentfb::findOrFail($environmentId);
	}
	
	public function edit($environmentId)
	{
		$dannick = Environmentfb::findOrFail($environmentId);
	}
	
	public function update($environmentId, Request $request)
	{
		$dannick = Environmentfb::findOrFail($environmentId);
		$input = $request->all();
		$dannick->fill($input)->save();
	}

	public function destroy($environmentId) 
	{
		$dannick = Environmentfb::findOrFail($environmentId);
		$dannick->delete();
	}
}