@layout('layouts.default')

@section('content')
	<h1>Login</h1>
    <!-- check for login errors flash var -->
    @if (Session::has('errors'))
        <span class="error">Username or password incorrect.</span>
    @endif

	{{ Form::open('login', 'POST')}}

	{{ Form::token() }}
		
	<p>
		{{ Form::label('email', 'Email')}}
		{{ Form::text('email', Input::old('email'))}}
	</p>

	<p>
		{{ Form::label('password', 'Password')}}
		{{ Form::password('password')}}
	</p>	

	<p>{{ Form::submit('Login') }}</p>

	{{ Form::close() }}
@endsection