<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>TenantPlus - @yield('title')</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
	<style>
	#message {
		color: blue;
		padding: 5px;
		border-bottom: 1px solid blue;
		border-top: 1px solid blue;

	}
	.nav li {
		display: inline;
	}
	.nav li + li {
		padding-left: 50px;
	}
/*	h3.form {
		display: inline;
		padding-top: 100px;
		padding-bottom: 100px;
	}*/
	</style>
</head>
<body>
	<div class="wrapper">

		<header>
			<h1>{{ HTML::link_to_route('home', 'TenantPlus.co.nz') }}</h1>
		</header>

		<div class="nav">
			<ul>
				<li>{{ HTML::link_to_route('home', 'Home') }}</li>
					@if (!Auth::check())
						<li>About TenantPlus</li>
						<li>Demo</li>
						<li>{{ HTML::link_to_route('login', 'Login') }} | {{ HTML::link_to_route('signup', 'Sign Up') }}</li>					@else
						@if(Auth::user()->type == 'landlord')
							<li>{{ HTML::link_to_route('properties', 'Properties') }}</li>
							<li>{{ HTML::link_to_route('documents', 'Documents') }}</li>
							<li>{{ HTML::link_to_route('all_tenants', 'Tenants') }}</li>
						@elseif(Auth::user()->type == 'tenant')
							<li>{{ HTML::link_to_route('tenant_documents', 'Documents') }}</li>
							<li>Current Applications</li>
						@endif
							<li>{{ HTML::link_to_route('account', 'Account') }}</li>
						<li>{{Auth::user()->first_name}}
							({{ Auth::user()->type }}) 
							({{ HTML::link_to_route('logout', 'Logout') }})</li>
					@endif				
			</ul>
		</div>

		<div class="main">
			@if(Session::has('message'))
				<p id="message">{{ Session::get('message') }}</p>
			@endif

			@yield('content')
		</div> <!-- end main -->
	
		<hr>
		<footer>
			Copyright 2013 TenantPlus
		</footer>
	</div> <!-- end wrapper -->
</body>
</html>
