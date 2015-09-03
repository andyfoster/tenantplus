@layout('layouts.default')

@section('title')
Signup
@endsection

@section('content')
	<h1>Signup</h1>

	@if($errors->has())
		<p>The following errors have occurred:</p>

		<ul id="form-errors">
			{{-- $validation->errors->all('<p>:message</p>') --}}
			{{ $errors->first('first_name', '<li>:message</li>') }}
			{{ $errors->first('last_name', '<li>:message</li>') }}
			{{ $errors->first('phone_number', '<li>:message</li>') }}
			{{ $errors->first('email', '<li>:message</li>') }}
			{{ $errors->first('type', '<li>:message</li>') }}
			{{ $errors->first('password', '<li>:message</li>') }}
			{{ $errors->first('password_confirmation', '<li>:message</li>') }}
		</ul>
	@endif

	{{ Form::open('signup', 'POST') }}
	{{ Form::token() }}

	<p>
		{{ Form::label('first_name', 'First Name')}}
		{{ Form::text('first_name', Input::old('first_name'))}}
	</p>

	<p>
		{{ Form::label('last_name', 'Last Name')}}
		{{ Form::text('last_name', Input::old('last_name'))}}
	</p>

	<p>
		{{ Form::label('email', 'Email Address')}}
		{{ Form::text('email', Input::old('email'))}}
	</p>

	<p>
		{{ Form::label('phone_number', 'Phone Number')}}
		{{ Form::text('phone_number', Input::old('phone_number'))}}
	</p>

	<p>
		{{ Form::label('password', 'Password')}}
		{{ Form::password('password')}}
	</p>
	<p>
		{{ Form::label('password_confirmation', 'Confirm Password')}}
		{{ Form::password('password_confirmation')}}
	</p>
	
		<p>
		{{ Form::label('type', 'Landlord or Tenant')}}
		{{ Form::select('type', array('landlord' => 'Landlord', 'tenant' => 'Tenant'), 'Landlord') }}
	</p>


	<p>
		{{ Form::submit('Register')}}
	</p>

	{{ Form::close() }}
@endsection