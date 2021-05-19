<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RegistrationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
		
		$validated = $request->validate(array(
			'name' => 'required|max:100|min:3',
			'email' => 'required|email|max:100|min:8',
			'password' => 'required|confirmed|min:8'
		));
		
		if(!$validated){
			return redirect()->back()->withInput();
		}
		
        return $next($request);
    }
	
}
