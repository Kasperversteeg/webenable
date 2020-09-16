@extends('master')

@section('content')
	
	<h1>Stuur je aanvraag</h1>

	<div class="mt-4">
		<form>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="name">Naam</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Voer naam in">
				</div>
				<div class="form-group col-md-4">
					<label for="surname">Achternaam</label>
					<input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" placeholder="Voer achternaam in">
				</div>
				<div class="form-group col-md-4">
					<p>Geslacht</p>
					<div class="form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" checked>
						<label class="form-check-label" for="genderMale">
						Man
						</label>
					</div>
					<div class="form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
						<label class="form-check-label" for="genderFemale">
						Vrouw
						</label>
					</div>
				</div>
			</div>

			<hr />

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="mail">E-mail</label>
					<input type="text" class="form-control @error('email') is-invalid @enderror" id="mail" placeholder="Voer naam in">
				</div>
				<div class="form-group col-md-4">
					<label for="phone">Telefoon</label>
					<input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Voer achternaam in">
				</div>
				<div class="form-group col-md-4">
					<label for="residence">Woonplaats</label>
					<input type="text" class="form-control @error('residence') is-invalid @enderror" id="residence" placeholder="Voer achternaam in">
				</div>
			</div>

			<hr />
			
			<div class="form-group">
				<p class="mb-0">Title</p>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					<label class="form-check-label" for="exampleRadios1">
					Default radio
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<label class="form-check-label" for="exampleRadios2">
					Second default radio
					</label>
				</div>
				<div class="form-check disabled">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
					<label class="form-check-label" for="exampleRadios3">
					Disabled radio
					</label>
				</div>
				@error('name')
					<div class="invalid-feedback">
						You must agree before submitting.
					</div>
				@enderror
			</div>


			<button type="submit" class="btn btn-primary">Submit</button>
		</form>		
	</div>


@endsection