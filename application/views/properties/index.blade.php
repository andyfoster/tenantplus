@layout('layouts.default')

@section('title')
Your Properties
@endsection


@section('content')
<h1>Your Properties for 2013</h1>
<p>View: <a href="">2014</a> | <a href="">2012</a> | <a href="">2011</a></p>
<p>{{ HTML::link('add', 'Add A Property') }}</p>
<hr>
<h3>180 Castle St (The Feisty Goat) {{HTML::link('edit', 'Edit')}}</h3>
<p>
	8 tenants
	<br>
</p>
<hr>

<h3>14 Clyde St (27 Steps to Heaven)</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, aperiam, architecto, voluptates, explicabo consectetur qui sed laborum illo cupiditate quia ducimus nemo inventore ad? Ut, laudantium itaque repudiandae provident neque!</p>
<hr>

<h3>23 Forth St (Forth of July)</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, aperiam, architecto, voluptates, explicabo consectetur qui sed laborum illo cupiditate quia ducimus nemo inventore ad? Ut, laudantium itaque repudiandae provident neque!</p>
<hr>
@endsection