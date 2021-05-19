@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-lg-8 col-md-10 col-sm-12">
		<div class="card py-4 px-4 border-white">
			<div class="card-body">
				<form method="post" action="{{ route('posts.add') }}">
					@csrf
					  <div class="form-group">
						<textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					   <button type="submit" class="btn btn-dark px-5">Post</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-8 col-md-10 col-sm-12">
		<div class="card py-4 px-4 border-white">
		
		@foreach($posts as $post)
			<div class="post border-top py-3">
				<p class="font-weight-bold">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
					  <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
					  <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
					</svg>
					<a href="" class="text-dark">
					{{ $post->user->name }}
					</a> <span class="mx-3 font-weight-light font-italic text-muted" style="font-size: 12px">29 minutes ago<span>
				</p>
				<p>
				{{	$post->body }}
				</p>
				
				<p>
				
				@if(auth()->user()->id === $post->user_id)
					<span class="mr-3"><a href="" class="text-dark font-weight-bold">Delete</a></span>
				@endif
				
					<span class="mr-3"><a href="" class="text-dark font-weight-bold">Like</a> 0 likes</span>
					<span class="mr-3"><a href="" class="text-dark font-weight-bold">Unlike</a> 1 likes</span>		
					
				</p>
			</div>
		@endforeach
		</div>
	</div>
</div>

@endsection