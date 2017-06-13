<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\v1\PermitService;
use App\Precautionfb;

class PrecautionfbController extends Controller
{
	protected $precautionfb;
    public function __construct(PermitService $service) {
		$this->precautionfb = $service;
	}

	public function index()
	{
		$dannick = Precautionfb::all();
		return response()->json($dannick);
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$dannick = Precautionfb::create($input);
		return $dannick;
	}
	
	public function show($precautionId)
	{
		$dannick = Precautionfb::findOrFail($precautionId);
		return view('tasks/work')->withTask($dannick);
	}
	
	public function edit($precautionId)
	{
		$dannick = Precautionfb::findOrFail($precautionId);
	}
	
	public function update($precautionId, Request $request)
	{
		$dannick = Precautionfb::findOrFail($precautionId);
		$input = $request->all();
		$dannick->fill($input)->save();
		return redirect()->back();
	}

	public function destroy($precautionId) 
	{
		$dannick = Precautionfb::findOrFail($precautionId);
		$dannick->delete();
	}
}