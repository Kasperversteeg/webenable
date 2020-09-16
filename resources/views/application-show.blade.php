@extends('master')

@section('content')
    <h1>{{ $application->name . ' ' . $application->surname  }}</h1>
    @foreach ($application->getAttributes() as $key => $value)
        <p class="mb-0"><span class="mr-2 font-weight-bold">{{ ucfirst($key) }}:</span>{{ $value }}</p>
    @endforeach
@endsection