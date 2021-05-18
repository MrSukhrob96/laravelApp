@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-6">
		<form class="">
			<div class="card py-4 px-4 border-white">
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
				    <button type="submit" class="btn btn-dark mt-4 px-4">login</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection