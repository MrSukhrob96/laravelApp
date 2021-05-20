<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request)
	{
		if($post->likedBy($request->user())) {
			return back();
		}
		
		$post->likes()->create(array(
			"user_id" => $request->user()->id,
			
		));
		
		return back();
	}
	
	public function show(Post $post)
	{
		 return view('posts.liked_users', ['likes' => $post->likes]);
	}
	
	public function update(Post $post, Request $request)
	{
		if($post->user_id === $request->user()->id) {			
			 return view('posts.liked_users', ['likes' => $post->likes]);
		}
		
		if($post->likedBy($request->user())) {
			return back();
		}
		
		$post->likes()->create(array("user_id" => $request->user()->id));
		
		return back();
	}
	
}
