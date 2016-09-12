<?php

namespace pbody\Http\Controllers;

use Illuminate\Http\Request;

use pbody\Http\Requests;

use pbody\User;

class BodyController extends Controller
{
    //
    public function index() {
    	$users = User::all();
    	return view('user.index')->with('users', $users);
    }

    public function show($id) {
		$user = User::find($id);
		return view('user.show')->with('user', $user);
	}

	public function create($id) {
		$user = User::find($id);
		return view('user.show')->with('user', $user);
	}
}
