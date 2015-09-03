@layout('layouts.default')

@section('content')
	<h1>Landlord Only Section</h1>
<p>Landlordy stuff</p>
<p>
	<ol class="nav">
		<li>Account Info COMPLETED</li>
		<li>Fill in some property info NEXT</li>
		<li>Credit card/billing info</li>
	</ol>
</p>
<h3>Collaborators:</h3>
<p>
	Click to add collaborators (property managers, lawyer etc) - $5 per person
</p>
<h3></h3>

<hr>
<h2>Landlord Hub</h2>
<h3>Property Overview</h3>
<p></p>
<h3>Send an application</h3>
<p>Group Name: {{Form::text('') }}
<br>
Properties of interest: <br>
{{Form::checkbox('box', '')}} 123 Castle 
<br>
{{Form::checkbox('box', '')}} 13 Leith 
<br>
Group Size: {{Form::text('')}}
<br>
Form to send: <input type="radio"> Pretenancy Application
<br>
Collaborators: <input type="checkbox">
</p>
<h3>No pending applications</h3>

<hr>

<h3>Email Generated</h3>
<textarea name="" id="" cols="30" rows="10">
	Hi Steve,
	Thanks for signing up for {one of my properties}.
	Please have each of your potential flatmates fill in {this} form
</textarea>

<hr>
<h2>Collaborators:</h2>
<p>
	(have a collaboration table in db)
</p>
<hr>
<h2></h2>

@endsection