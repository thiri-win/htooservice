@extends('master')

@section('content')
	@component('layouts.partials._form')

		@slot('heading')
			{{ isset($empense) ? 'Expense Edit Form' : 'New Expense Form'}}
		@endslot

		@slot('form')
			<form 
			action="{{ isset($experience) ? route('experiences.update', $experience->id) : route('experiences.store') }}" 
			method="POST"
			enctype="multipart/form-data">

			@csrf
			@if (isset($experience))
				@method('PUT')
			@endif

			<div class="container">
				<div class="w-full flex my-5">
					<label for="level" class="w-1/3">Experience Level</label>
					<div class="w-2/3">
						<input 
						class="form-control @error('level') is-invalid @enderror" 
						type="text" 
						value="{{ old('level' , isset($experience) ? $experience->level : '') }}" 
						id="level" 
						name="level"
						autofocus>
						@error('level')
						<p class="invalid>{{ $message }}</p>
						@enderror
					</div>
				</div>
			</div>
			<div class="w-full flex my-5">
				<a href="{{ route('experiences.index') }}" class="cancel">Cancel</a>
				<button type="submit" class="submit">Submit</button>
			</div>
		</form>
		@endslot
 	@endcomponent

@endsection