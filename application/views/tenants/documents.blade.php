@layout('layouts.default')

@section('content')
<h1>Your Documents</h1>


@if(!$documents)
	No forms
@else
	@foreach($documents as $document)
		<h3>{{ HTML::link_to_route('tenant_view_document', $document->name, $document->id) }}</h3>
		<p>{{$document->description}}</p>
		<p>Generate Link for this document</p>
		<hr>
	@endforeach
@endif

@endsection