@extends('master')

@section('content')
	<div class="my-3">
		<h1>{{ $page->title }}</h1>
		<p>{{ $page->content }}</p>
	</div>
	 
	<div class="my-3">
		<h3>Nieuws</h3>
		@foreach ($newsItems as $newsItem)
			<div class="p-2 shadow-sm mb-2">
				<h5>{{ $newsItem->title }}</h5>
				<p>{{ $newsItem->content }}</p>
			</div>
		@endforeach
	</div>

@endsection