@layout('layouts.default')


@section('title')
{{$document->name}}
@endsection


@section('content')
<h1>{{ $document->name }}</h1>
<p>{{ $document->description }}</p>

<hr>

@foreach($document->fields as $field)
	@if($field->type == 'section')
		<h3>{{ $field->label}}</h3>

	@elseif($field->type == 'description')
		<i>{{ $field->label}}</i>
	@else
		{{ Form::text('', $field->label)}}
		{{ Form::select('field_type', array('text' => 'Textbox', 'password' => 'Password', 'textarea' => 'Textarea', 'yn' => 'Yes/No', 'section' => 'Section Header', 'description' => 'Description'), $field->type)}}


	@endif
	<br>
@endforeach

@endsection