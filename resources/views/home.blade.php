@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-12">
		@if(session()->has('success'))
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8 col-sm-10">
					<div class="alert alert-success" role="alert">
						{{ session()->get('success') }}
					</div>
				</div>
			</div>
		@endif
	</div>
</div>

@endsection