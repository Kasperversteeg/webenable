<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
	<div class="container d-flex justify-content-between">
		<div>
			<a class="navbar-brand" href="{{ route('home') }}">Uitzendbureau Webenable</a>
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item {{ (request()->segment(1) == '') ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('home') }}">Home</a>
				</li>
				<li class="nav-item {{ (request()->segment(1) == 'application' && request()->segment(2) == 'create' ) ? 'active text-primary' : '' }}">
				<a class="nav-link " href="{{ route('application.create') }}">Inschrijven</a>
				</li>
				<li class="nav-item {{ (request()->segment(1) == 'application' && request()->segment(2) == '') ? 'active text-primary' : '' }}">
				<a class="nav-link" href="{{ route('application.index') }}">Inschrijvingen</a>
				</li>
			</ul>
		</div>
	</div>
	

 </nav>