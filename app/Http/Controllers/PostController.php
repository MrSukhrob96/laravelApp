<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
	{
		$posts = Post::with("user", "likes")->paginate(5);
		return view('posts.index', compact('posts'));
	}
	
	public function store(Request $request)
	{
		$request->user()->posts()->create($request->only('body'));
		
		return redirect()->back()->with('success', 'Post added successfuly!');
	}
	
	public function destroy(Post $post, Request $request)
	{
		$post->where('id', $post->id)->delete();
		return back();
	}	
	
}
