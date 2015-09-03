@layout('layouts.default')

@section('title')
Documents
@endsection


@section('content')
<h1>Documents</h1>


@if(!$documents)
	No forms
@else
	@foreach($documents as $document)
		<h3>{{ HTML::link_to_route('document', $document->name, $document->id) }}</h3>
		<p>{{$document->description}}</p>
		<p>Generate Link for this document</p>
		<p>Link: http://www.tenantplus.co.nz/document/234</p>
		<p>Make a table in the DB to hold URLs</p>
		<p>Would just go to URL@ index and then redirect</p>
		<hr>
	@endforeach
@endif


<p>Coming Soon: Custom Forms/Documents</p>
@endsection