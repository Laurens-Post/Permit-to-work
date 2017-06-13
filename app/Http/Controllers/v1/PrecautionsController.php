<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\v1\PermitService;
use App\Precautions;

class PrecautionsController extends Controller
{
	protected $precautions;
    public function __construct(PermitService $service) {
		$this->precautions = $service;
	}

	public function index()
	{
		$dannick = Precautions::all();
		return response()->json($dannick);
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$dannick = Precautions::create($input);
		return $dannick;
	}
	
	public function show($precautionsId)
	{
		$dannick = Precautions::findOrFail($precautionsId);
		return view('tasks/work')->withTask($dannick);
	}
	
	public function edit($protectionId)
	{
		$dannick = Precautions::findOrFail($precautionsId);
	}
	
	public function update($protectionId, Request $request)
	{
		$dannick = Precautions::findOrFail($precautionsId);
		$input = $request->all();
		$dannick->fill($input)->save();
		return redirect()->back();
	}

	public function destroy($protectionId) 
	{
		$dannick = Precautions::findOrFail($precautionsId);
		$dannick->delete();
	}
		
}