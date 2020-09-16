@extends('master')

@section('content')
    <div class="bg-light px-3 py-2 shadow-sm">
        <h1>{{ $newsItem->title }}</h1>
        <p>{{ $newsItem->content }}</p>
    </div>
@endsection