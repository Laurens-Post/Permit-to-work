<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permits;
use Session;  
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class TasksController extends Controller
{
    public function index()
	{
		$tasks = Permits::all();
		return view('tasks')->withTasks($tasks);
	}

	public function create()
	{
		return view('tasks/create');
	}
	
	//	public function create2()
	//{
	//	return view('tasks/create2');
	//}

	public function store(Request $request)
	{
		$this->validate($request, [
		'permitName' => 'required|min:5|max:25',
        'type',
		'workDescription' => 'required|min:5|max:525',
		]);
		

		$input = $request->all();
		$tasks = Permits::create($input);
		//return redirect()->back();
		return view('tasks/work');
	}
	
	public function show($permitId)
	{
		$task = Permits::findOrFail($permitId);
		//$next = User::where('danger', '>', $task->danger)->min('danger');
		//Session::flash('flash_message', 'Permit successfully added!');
		return view('tasks/show')->withTask($task);
		//return View::make('tasks/show')->withTask($task)->with('next', $next);
	}
	
	public function edit($permitId)
	{
		$task = Permits::findOrFail($permitId);
		Session::flash('flash_message', 'Permit successfully updated!');
		return view('tasks/edit')->withTask($task);
	}
	
	public function update($permitId, Request $request)
	{
		$task = Permits::findOrFail($permitId);
		$this->validate($request, [
		'permitName' => 'required',
        'type' => 'required',
    ]);

		$input = $request->all();
		$task->fill($input)->save();
		Session::flash('flash_message', 'Permit successfully updated!');
		return redirect()->back();
	}

	public function destroy($permitId) 
	{
		$task = Permits::findOrFail($permitId);
		$task->delete();
		return redirect()->route('tasks.index');
		
		//return Redirect::to('api/tasks');
	}

}
