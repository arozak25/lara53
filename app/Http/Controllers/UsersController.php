<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	$users = [
			'0' => [
				'first_name' => 'Abdul',
				'last_name' => 'Rozak',
				'country' => 'USA'
			],
			'1' => [
				'first_name' => 'Abdul',
				'last_name' => 'Cuy',
				'country' => 'USA'
			]
		];
	//return $users;
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
