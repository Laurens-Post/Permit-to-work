<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\v1\PermitService;
use App\Protection;

class ProtectionController extends Controller {

	public function index()
	{
		$dannick = Protection::all();
		return response()->json($dannick);
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$dannick = Protection::create($input);
		return $dannick;
	}
	
	public function show($protectionId)
	{
		$dannick = Protection::findOrFail($protectionId);
		return view('v1/protection')->withTask($dannick);
	}
	
	public function edit($protectionId)
	{
		$dannick = Protection::findOrFail($protectionId);
	}
	
	public function update($protectionId, Request $request)
	{
		$dannick = Protection::findOrFail($protectionId);
		$input = $request->all();
		$dannick->fill($input)->save();
		return redirect()->back();
	}

	public function destroy($protectionId) 
	{
		$dannick = Protection::findOrFail($protectionId);
		$dannick->delete();
	}
		
}