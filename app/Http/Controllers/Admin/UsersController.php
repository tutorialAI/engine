<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{	
	public function show()
	{
	    $users_list = User::all();
	    return response()->json($users_list, 201);
	}
}
