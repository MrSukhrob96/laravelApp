<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
	{
		$posts = Post::all();
		return view('posts.index', compact('posts'));
	}
	
	public function store(Request $request)
	{
		$request()->user()->posts()->create($request->only('body'));
		
		return redirect()->route();
	}
	
}
