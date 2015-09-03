@layout('layouts/default')

@section('title')
Your Tenants
@endsection


@section('content')
<h1>Your Tenants for 2013</h1>
<p>View: <a href="">2014</a> | <a href="">2012</a> | <a href="">2011</a></p>
<p>{{ HTML::link('add', 'Add A Tenant') }}</p>
<p>
	{{ Form::label('filter', 'Filter') }}
	{{ Form::text('filter', '', array('placeholder' => 'filter tenants')) }}
</p>
<ul>
	<li><a href="">Joe Bloggs (208 Castle St)</a></li>
	<li><a href="">Steve Bloggs (18 Forth St)</a></li>
	<li><a href="">Steve Bloggs (101 Stuart St)</a></li>
	<li><a href="">Steve Bloggs (29 Dundas St)</a></li>
	<li><a href="">Steve Bloggs (56 Princes St)</a></li>
</ul>

@endsection