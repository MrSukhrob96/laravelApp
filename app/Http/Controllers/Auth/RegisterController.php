<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
	{
		return view('auth.registration');
	}
	
	public function store(Request $request)
	{
		
		User::create(array(
			"name" => $request->name,
			"email" => $request->email,
			"password" => Hash::make($request->password),
			"remember_token" => $request->_token
		));
		
		auth()->attempt($request->only("email", "password"), true);
		
		return redirect()->route('home');
		
	}
}
