@extends('master')

@section('content')

	@component('layouts.partials._form')

		@slot('heading')
			{{ isset($position) ? 'Position Edit Form' : 'New Position Form'}}
		@endslot

		@slot('form')

			<form 
			action="{{ isset($position) ? route('positions.update', $position->id) : route('positions.store') }}" 
			method="POST"
			enctype="multipart/form-data">

				@csrf
				@if (isset($position))
				@method('PUT')
				@endif

				<div class="container">
					
					<div class="w-full flex my-2">
						<label for="jobtitle" class="w-1/3">Job Title</label>
						<div class="w-2/3">
							<input 
							class="form-control @error('jobtitle') is-invalid @enderror" 
							type="text" 
							value="{{ old('jobtitle' , isset($position) ? $position->jobtitle : '') }}" 
							id="jobtitle" 
							name="jobtitle"
							autofocus>
							
							@error('jobtitle')
							<p class="invalid">{{ $message }}</p>
							@enderror
						</div>
					</div>
				</div>

				<div class="w-full flex my-2">
					<a href="{{ route('positions.index') }}" class="cancel">Cancel</a>
					<button type="submit" class="submit">Submit</button>
				</div>
						
			</form>
		@endslot

		
	@endcomponent

@endsection