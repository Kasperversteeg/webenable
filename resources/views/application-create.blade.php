@extends('master')

@section('content')
	
	<h1>Stuur je aanvraag</h1>

	<div class="mt-4">
		<form method="POST" action="{{ route('application.store') }}">
			@csrf
			@method('post')

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="name">Naam</label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Voer naam in" value="{{ old('name') }}" required>
					@error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="surname">Achternaam</label>
					<input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" id="surname" placeholder="Voer achternaam in" value="{{ old('surname') }}"  required>
					@error('surname')<div class="invalid-feedback">{{ $message }}</div>@enderror
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
					@error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
			</div>

			<hr />

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="mail">E-mail</label>
					<input type="email" class="form-control @error('mail') is-invalid @enderror" name="mail" id="mail" placeholder="Voer e-mail adres in" value="{{ old('mail') }}" required>
					@error('mail')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="phone">Telefoon</label>
					<input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="0612345678" value="{{ old('phone') }}" pattern="[0-9]{10}">
					@error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="residence">Woonplaats</label>
					<input type="text" class="form-control @error('residence') is-invalid @enderror" name="residence" id="residence" placeholder="Voer woonplaats in" value="{{ old('residence') }}"  required>
					@error('residence')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
			</div>

			<hr />

			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="education">Opleiding</label>
					<input type="text" class="form-control @error('education') is-invalid @enderror" name="education" id="education" placeholder="Voer opleiding in" value="{{ old('education') }}">
					@error('education')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="experience">Werkervaring</label>
					<input type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" id="experience" placeholder="Voer ervaring in" value="{{ old('experience') }}">
					@error('experience')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="function">Gewenste functie</label>
					<input type="text" class="form-control @error('function') is-invalid @enderror" name="function" id="function" placeholder="Voer gewenste functie in" value="{{ old('function') }}">
					@error('function')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
			</div>

			<hr />

			<div class="form-row">
				<div class="form-group col-md-4">
					<p>Vakgebied</p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="expertise" id="office" value="office" checked>
						<label class="form-check-label" for="office">
						Office
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="expertise" id="techniek" value="techniek">
						<label class="form-check-label" for="techniek">
						Techniek
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="expertise" id="horeca" value="horeca">
						<label class="form-check-label" for="horeca">
						Horeca
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="expertise" id="onbekend" value="onbekend">
						<label class="form-check-label" for="onbekend">
						Onbekend
						</label>
					</div>
					@error('expertise')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-4">
					<p>Aanleiding</p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="reason" id="office" value="werkzoekend" checked>
						<label class="form-check-label" for="office">
						Werkzoekend
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="reason" id="techniek" value="uitdaging">
						<label class="form-check-label" for="techniek">
						Meer uitdaging
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="reason" id="horeca" value="werk">
						<label class="form-check-label" for="horeca">
						Meer of minder werk
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="reason" id="onbekend" value="dichterbij">
						<label class="form-check-label" for="onbekend">
						Dichter bij huis
						</label>
					</div>
					@error('reason')<div class="invalid-feedback">{{ $message }}</div>@enderror
				</div>
				<div class="form-group col-md-4">
					<p>Locatie</p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="location" id="zwaag" value="zwaag" checked>
						<label class="form-check-label" for="zwaag">
						Zwaag
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="location" id="heerhugowaard" value="heerhugowaard">
						<label class="form-check-label" for="heerhugowaard">
						Heerhugowaard
						</label>
					</div>
					@error('location')<div class="invalid-feedback">{{ __($message) }}</div>@enderror
				</div>
			</div>

			<hr />

			<div class="form-group">
				<label for="remark">Opmerking (optioneel)</label>
				<textarea class="form-control" id="remark" name="remark" rows="3">{{ old('remark') }}</textarea>
				@error('remark')<div class="invalid-feedback">{{ $message }}</div>@enderror
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>		
	</div>


@endsection