@extends('master')

@section('content')

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

	<!--begin::Portlet-->
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					New Position
				</h3>
			</div>
		</div>

		<!--begin::Form-->
		<form class="kt-form kt-form--label-right" 
		action="{{ isset($position) ? route('positions.update', $position->id) : route('positions.store') }}" 
		method="POST"
		enctype="multipart/form-data">
		@csrf
		@if (isset($position))
		@method('PUT')
		@endif

		<div class="kt-portlet__body">
			<div class="form-group row">
				<label for="jobtitle" class="col-2 col-form-label">Job Title</label>
				<div class="col-10">
					<input 
					class="form-control @error('jobtitle') is-invalid @enderror" 
					type="text" 
					value="{{ old('jobtitle' , isset($position) ? $position->jobtitle : '') }}" 
					id="jobtitle" 
					name="jobtitle">
					@error('jobtitle')
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
						<a href="{{ route('positions.index') }}" class="btn btn-outline-dark">Cancel</a>
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