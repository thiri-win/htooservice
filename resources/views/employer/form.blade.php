@extends('master')

@section('content')

	@component('layouts.partials._form')

		@slot('heading')
			{{ isset($employer) ? 'Employer Edit Form' : 'New Employer Form'}}
		@endslot

		@slot('form')
			<form 
				action="{{ isset($employer) ? route('employers.update', $employer->id) : route('employers.store') }}" 
				method="POST">

				@csrf
				@if (isset($employer))
					@method('PUT')
				@endif
		
				<div class="container">

					<div class="w-full flex my-5">
						<label for="name" class="w-1/3">Name</label>
						<div class="w-2/3">
							<input 
							class="form-control @error('name') is-invalid @enderror" 
							type="text" 
							value="{{ old('name' , isset($employer) ? $employer->name : '') }}" 
							id="name" 
							name="name"
							autofocus>
							@error('name')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
		
					<div class="w-full flex my-5">
						<label for="dob" class="w-1/3">Date of Birth</label>
						<div class="w-2/3">
							<input 
							class="form-control @error('dob') is-invalid @enderror" 
							type="date" 
							name="dob" 
							id="dob" 
							value="{{ old('dob', isset($employer) ? $employer->dob : '') }}">
							@error('dob')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
		
					<div class="w-full flex my-5">
						<label for="nrc" class="w-1/3">NRC</label>
						<div class="w-2/3">
							<input 
							class="form-control @error('nrc') is-invalid @enderror" 
							type="text" 
							name="nrc"
							id="nrc" 
							value="{{ old('nrc', isset($employer) ? $employer->nrc : '') }}" >
							@error('nrc')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div class="w-full flex my-5">
						<label for="email" class="w-1/3">Email</label>
						<div class="w-2/3">
							<input 
							class="form-control @error('email') is-invalid @enderror" 
							type="email" 
							value="{{ old('email', isset($employer) ? $employer->email : '') }}" 
							id="email" 
							name="email">
							@error('email')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div class="w-full flex my-5">
						<label for="phone" class="w-1/3">Phone</label>
						<div class="w-2/3">
							<input 
							class="form-control @error('phone') is-invalid @enderror" 
							type="tel" 
							value="{{ old('phone', isset($employer) ? $employer->phone : '' ) }}" 
							id="phone" 
							name="phone">
							@error('phone')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div class="w-full flex my-5">
						<label for="address" class="w-1/3">Address</label>
						<div class="w-2/3">
							<input 
							class="form-control @error('address') is-invalid @enderror" 
							type="text" 
							value="{{ old('address', isset($employer) ? $employer->address : '' ) }}" 
							id="address" 
							name="address">
							@error('address')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div class="w-full flex my-5">
						<label for="about" class="w-1/3">About</label>
						<div class="w-2/3">
							<textarea name="about" id="about" cols="30" rows="5" class="form-control @error('about') is-invalid @enderror">{{ old('about', isset($employer) ? $employer->about : '' ) }}</textarea>
							@error('about')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div class="w-full flex my-5">
						<a href="{{ isset($employer) ? route('employers.show',$employer->id) : route('employers.index') }}" class="cancel">Cancel</a>
						<button type="submit" class="submit">Submit</button>
					</div>
				</div>
			</form>
		@endslot
		
	@endcomponent

@endsection