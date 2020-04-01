@extends('master')

@section('content')

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

	<!--begin::Portlet-->
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					New Employer
				</h3>
			</div>
		</div>

		<!--begin::Form-->
		<form class="kt-form kt-form--label-right" action="{{ isset($employer) ? route('employers.update', $employer->id) : route('employers.store') }}" method="POST">
		@csrf
		@if (isset($employer))
		@method('PUT')
		@endif

		<div class="kt-portlet__body">
			<div class="form-group row">
				<label for="name" class="col-2 col-form-label">Name</label>
				<div class="col-10">
					<input 
					class="form-control @error('name') is-invalid @enderror" 
					type="text" 
					value="{{ old('name' , isset($employer) ? $employer->name : '') }}" 
					id="name" 
					name="name">
					@error('name')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="dob" class="col-2 col-form-label">Date of Birth</label>
				<div class="col-10">
					<input 
					class="form-control @error('dob') is-invalid @enderror" 
					type="date" 
					name="dob" 
					id="dob" 
					value="{{ old('dob', isset($employer) ? $employer->dob : '') }}">
					@error('dob')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="nrc" class="col-2 col-form-label">NRC</label>
				<div class="col-10">
					<input 
					class="form-control @error('nrc') is-invalid @enderror" 
					type="text" 
					name="nrc"
					id="nrc" 
					value="{{ old('nrc', isset($employer) ? $employer->nrc : '') }}" >
					@error('nrc')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-2 col-form-label">Email</label>
				<div class="col-10">
					<input 
					class="form-control @error('email') is-invalid @enderror" 
					type="email" 
					value="{{ old('email', isset($employer) ? $employer->email : '') }}" 
					id="email" 
					name="email">
					@error('email')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="phone" class="col-2 col-form-label">Phone</label>
				<div class="col-10">
					<input 
					class="form-control @error('phone') is-invalid @enderror" 
					type="tel" 
					value="{{ old('phone', isset($employer) ? $employer->phone : '' ) }}" 
					id="phone" 
					name="phone">
					@error('phone')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="address" class="col-2 col-form-label">Address</label>
				<div class="col-10">
					<input 
					class="form-control @error('address') is-invalid @enderror" 
					type="text" 
					value="{{ old('address', isset($employer) ? $employer->address : '' ) }}" 
					id="address" 
					name="address">
					@error('address')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="about" class="col-2 col-form-label">About</label>
				<div class="col-10">
					<textarea name="about" id="about" cols="30" rows="10" class="form-control @error('about') is-invalid @enderror">{{ old('about', isset($employer) ? $employer->about : '' ) }}</textarea>
					@error('about')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
			</div>
		</div>
		<div class="kt-portlet__foot">
			<div class="kt-form__actions">
				<div class="row">
					<div class="col-2">
					</div>
					<div class="col-10">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="{{ isset($employer) ? route('employers.show',$employer->id) : route('employers.index') }}" class="btn btn-outline-dark">Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<!--end::Portlet-->

</div>
<!-- end:: Content -->

@endsection