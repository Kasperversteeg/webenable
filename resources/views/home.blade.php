@extends('master')

@section('content')
	<div class="my-3">
		<h1>{{ $page->title }}</h1>
		<p>{{ $page->content }}</p>
	</div>
	 
	<div class="my-3">
		<h3>Nieuws</h3>
		@foreach ($newsItems as $newsItem)
			<div class="px-4 py-2 shadow-sm mb-3 bg-light d-flex flex-column">
				<h5>{{ $newsItem->title }}</h5>
				<p>{{ $newsItem->content }}</p>
				<div class="d-flex justify-content-end">
					<a href="{{ route('news.show', $newsItem->id) }}" class="justify-self-end">lees meer</a>
				</div>
			</div>
		@endforeach
	</div>

@endsection