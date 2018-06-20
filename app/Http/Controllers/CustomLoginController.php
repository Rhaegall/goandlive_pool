<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
	public function display_login()
	{
		return view('login');
	}


    //Function for create my personnal login
    public function login(Request $request)
	{
		// i request my login and my password input value
		$credentials = $request->only('email', 'password');

		//i check if my login and my password exist on my databse
		if(Auth::attempt($credentials)){

			if(Auth::user()->pool_id != null) {
				
				return redirect('/pool');
			}

			return redirect('/create_pool');
			
		}

		//not correct, try again
		return 'error';
	}

	public function logout()
	{
		Auth::logout();

		return redirect('/');
	}
}
