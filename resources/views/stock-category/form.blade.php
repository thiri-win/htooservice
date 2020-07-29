@extends('master')

@section('content')
	@component('layouts.partials._form')

		@slot('heading')
			{{ isset($stockCategory) ? 'Stock Category Edit Form' : 'New Stock Category Form'}}
		@endslot

		@slot('form')
			<form 
				action="{{ isset($stockCategory) ? route('stock-categories.update', $stockCategory->id) : route('stock-categories.store') }}" 
				method="POST">

				@csrf
				@if (isset($stockCategory))
					@method('PUT')
				@endif

				<div class="w-full flex my-5">
					<label for="title" class="w-1/3">အမျိုးအမည်</label>
					<div class="w-2/3">
						<input 
						class="@error('title') invalid @enderror w-full"  
						type="text" 
						value="{{ old('title' , isset($stockCategory) ? $stockCategory->title : '') }}" 
						id="title" 
						name="title">
						@error('title')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="w-full flex my-5">
					<label for="remark" class="w-1/3">မှတ်ချက်</label>
					<div class="w-2/3">
						<textarea 
							name="remark" 
							id="remark" 
							cols="30" 
							rows="5" 
							class="@error('remark') invalid @enderror w-full"
							>{{ old('remark', isset($stockCategory) ? $stockCategory->remark : '') }}</textarea>
						@error('remark')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="w-full flex justify-end my-5">
					<a href="{{ route('stock-categories.index') }}" class="cancel">Cancel</a>
					<button type="submit" class="submit">Submit</button>
				</div>
			</form>
		@endslot
 	@endcomponent

@endsection

@push('scripts')
	<script>
	$(document).ready(function() {
		$qty = $('#qty').val();
		$price = $('#price').val();
		$total = $qty * $price;
		console.log($total);
	});
	</script>
@endpush