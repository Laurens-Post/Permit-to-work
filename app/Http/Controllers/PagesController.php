<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('pages.dashboard');
	}
	
	public function work()
	{
		return view('tasks/work');
	}
	
	public function description()
	{
		return view('tasks/description');
	}
	
}
