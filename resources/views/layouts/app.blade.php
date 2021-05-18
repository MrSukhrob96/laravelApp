<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <title>Laravel</title>
		
    </head>
    <body>
	<div id="app">
		<header id="header" class="navbar-expand-lg navbar-dark bg-dark mb-5">
			<div class="container py-1">
				<nav class="navbar">
				  <a class="navbar-brand" href="{{ route('home') }}">LOGO</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						@auth
						  <li class="nav-item active">
							<a class="nav-link" href="#">Home</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="#">Posts</a>
						  </li>
						@endauth
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<ul class="navbar-nav mr-auto">
						@auth
						  <li class="nav-item active">
							<a class="nav-link" href="#">Sukhrob Azimov</a>
						  </li>
						  <li class="nav-item ml-4">
							<a class="btn btn-outline-light" href="#">logout</a>
						  </li>
						@endauth
						@guest
						  <li class="nav-item ml-4">
							<a class="btn btn-outline-light" href="{{ route('login') }}">login</a>
						  </li>
						@endguest
						</ul>
					</form>
				  </div>
				</nav>
			</div>
		</header>
		<div class="container pl-4 pr-4">
			@yield('content')
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    
	</body>
</html>
