<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\v1\PermitService;
use App\Protectionfb;

class ProtectionfbController extends Controller
{
	protected $protectionfb;

	public function index()
	{
		$dannick = Protectionfb::all();
		return response()->json($dannick);
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$dannick = Protectionfb::create($input);
		return $dannick;
	}
	
	public function show($protectionId)
	{
		$dannick = Protectionfb::findOrFail($protectionId);
		return view('tasks/work')->withTask($dannick);
	}
	
	public function edit($protectionId)
	{
		$dannick = Protectionfb::findOrFail($protectionId);
	}
	
	public function update($protectionId, Request $request)
	{
		$dannick = Protectionfb::findOrFail($protectionId);
		$input = $request->all();
		$dannick->fill($input)->save();
		return redirect()->back();
	}

	public function destroy($protectionId) 
	{
		$dannick = Protectionfb::findOrFail($protectionId);
		$dannick->delete();
	}
}