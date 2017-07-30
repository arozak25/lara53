<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    //
    public function index()
    {
    	if (View::exists('pages.index'))
    		return view('pages.index')
    			->with('text', '<b>laravel</b>')
    			->with('name', 'nicole');
			//return view('pages.index', ['text' => '<b>laravel</b>']);
		else
			return 'No View Available';
    }

	public function profile()
	{
		return view('pages.profile');
	}

	public function setting()
	{
		return view('pages.setting');
	}

	public function blade()
	{
		return view('blade.bladetest');
	}
}
