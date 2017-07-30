<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
		//this will return a basic pagination nav
    	$users = User::Paginate(10);
		
		//this will return a simple pagination nav
		//$users = User::simplePaginate(10);
		return view('admin.users.index', compact('users'));
    }

    public function create(){
    	return view('admin.users.create');
    }

	public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
    }
}
