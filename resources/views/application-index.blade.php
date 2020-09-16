@extends('master')

@section('content')
	<h1>Aanvragen</h1>
	@if(session()->has('succes'))
		<div class="alert alert-success">
			{{ session()->get('succes') }}
		</div>
	@endif

	<div class="d-flex flex-wrap pt-2">
		@forelse ($applications as $application)
			<div class="col-12 col-md-6 ">
				<a href="{{ route('application.show', $application->id) }}">
					<div class="mx-1 bg-light shadow-sm pb-2 pt-3 px-3 mb-2">
						<h3>{{ $application->name . ' ' . $application->surname }}</h3>
						<p>{{ $application->mail }}</p>
					</div>
				</a>
			</div>
		@empty 
			<p>Geen aanvragen weer te geven</p>
		@endforelse
	</div>
@endsection