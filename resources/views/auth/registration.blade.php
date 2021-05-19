@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-lg-6 col-md-8 col-sm-10">
		<form class="" method="post" action="{{ route('register.add') }}">
			@csrf				
			<div class="card py-4 px-4 border-white">
				<div class="card-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="name" value="{{ old('name') }}" placeholder="Enter name">
						@error('name')
							<small id="name" class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Enter email">
						@error('email')
							<small id="email" class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Password">
						@error('password')
							<small id="password" class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="password_confirmation">Password Confirmation</label>
						<input type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror" id="password_confirmation" placeholder="Enter Password">
						@error('password')
							<small id="password_confirmation" class="form-text text-danger">{{ $message }}</small>
						@enderror
					</div>
				    <button type="submit" class="btn btn-dark mt-4 px-4">Registration</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection