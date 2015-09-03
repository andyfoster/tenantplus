@layout('layouts/default')

@section('title')
Your Account
@endsection


@section('content')
<h1>Your Account</h1>

<p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
<p>{{ Auth::user()->email }}</p>
<p>Password: ********</p>
<p>Type: {{ Auth::user()->type }}</p>
<p>Credit in Account: $5</p>
<p><a href="">Edit Your Details</a></p>
@endsection