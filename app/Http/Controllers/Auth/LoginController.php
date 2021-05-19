<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
	{
		return view('auth.login');
	}
	
	public function store(Request $request)
	{
		$this->validate($request, array(
			"email" => "required|email|min:8|max:100",
			"password" => "required|min:8|max:100"
		));
		
		auth()->attempt($request->only("email", "password"), $request->remember_me !== 'on' ? false : true);
		
		if(!auth()->check())
		{
			return redirect()->back()->with('result', 'Can\' find such user! May be you have error with you sign data (login or password)');
		}
		
		return redirect()->route('home')->with('success', 'Authorization passed successfully!');
	}
	
}
