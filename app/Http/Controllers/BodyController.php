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
    	return view('user.user')->with('users', $users);
    }
}
