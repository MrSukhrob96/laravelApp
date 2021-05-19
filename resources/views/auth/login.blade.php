
@extends('layouts.app')
	
@section('content')
		
<div class="row justify-content-center">
	<div class="col-lg-6 col-md-8 col-sm-10">
		<p class="mb-5">
		@if(session()->has('result'))
			<div class="alert alert-danger text-center" role="alert">
				{{ session()->get('result') }}
			</div>
		@endif
		</p>
		<form method="post" action="{{ route('login.add') }}">
			@csrf
			<div class="card py-4 px-4 border-white">
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Enter email">
						@error('email')
							<small id="email" class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Password">
						@error('password')
							<small id="password" class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" name="remember_me" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
				    <button type="submit" class="btn btn-dark mt-4 px-4">login</button>
				</div>
			</div>
		</form>
	</div>
	
</div>
@endsection