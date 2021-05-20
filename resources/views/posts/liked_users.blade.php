@extends('layouts.app')

@section('content')

@if($likes->count())
	<ul class="list-group">
	@foreach($likes as $like)
	  <li class="list-group-item d-flex justify-content-between align-items-center border-white mb-2">
		<a class="nav-link" href="{{ route('user.profile',$like->user->id ) }}">{{ $like->user->name }}</a>
		<span class="mx-3 font-weight-light font-italic text-muted" style="font-size: 12px">Liked {{ $like->created_at->diffForHumans() }}<span>
	  </li>	
	@endforeach
	</ul>
@else
	<p>No liked users</p>
@endif

@endsection