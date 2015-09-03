@layout('layouts.default')

@section('title')
{{$document->name}}
@endsection

@section('content')
<h1>{{ $document->name }}</h1>
<p>{{ $document->description }}</p>
<hr>
{{ Form::open('tenants/create_document', 'POST')}}
{{ Form::token() }}

@foreach($document->fields as $field)
	@if($field->type == 'section')
		<h3>{{ $field->label}}</h3>

	@elseif($field->type == 'description')
		<i>{{ $field->label}}</i>
	@else
		{{ Form::label($field->id, $field->label)}}
		<br>
		{{ Form::text('id' . $field->id, Answer::where_field_id_and_user_id($field->id, Auth::user()->id)->only('answer'), array('placeholder' => $field->label)) }}
	
		<br>
	@endif

	<br>
@endforeach
{{ Form::hidden('document_id', $document->id)}}
{{ Form::submit('Save Form')}}
{{ Form::close() }}

@endsection