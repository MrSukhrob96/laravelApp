<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserProfileController extends Controller
{
    public function show(User $user)
	{
		return view('profile.index', ['user' => $user, 'posts' => $user->posts]);
	}
}
