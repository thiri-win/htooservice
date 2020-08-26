@extends('master')

@section('content')
	@component('layouts.partials._form')

		@slot('heading')
			{{ isset($sale) ? 'Stock Edit Form' : 'New Stock Form'}}
		@endslot

		@slot('form')
			<form 
				action="{{ isset($sale) ? route('sales.update', $sale->id) : route('sales.store') }}" 
				method="POST">

				@csrf
				@if (isset($sale))
					@method('PUT')
				@endif

				<div class="w-full flex my-5">
					<label for="date" class="w-1/3">နေ့စွဲ</label>
					<div class="w-2/3">
						<input 
						class="w-full" 
						type="date" 
						value="{{ old('date' , isset($sale) ? $sale->date->format('Y-m-d') : date('Y-m-d')) }}" 
						id="date" 
						name="date"
						autofocus>
						@error('date')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="w-full flex my-5">
					<label for="stock_category_id" class="w-1/3">အမျိုးအစား</label>
					<div class="w-2/3">
						<select name="stock_category_id" id="stock_category_id" class="w-full p-1">
							<option value="">--Choose--</option>
							@foreach ($stock_categories as $category)
								<option 
									data-instock="{{ $category->instocks() }}"
									data-unit="{{ $category->stocks->last()->price ?? '' }}"
									value="{{ $category->id }}"
									@if (isset($sale))
										{{ $category->id == $sale->stock_category_id ? 'selected' : '' }}
									@else
										{{ old('stock_category_id') == $category->id ? 'selected' : ''}}
									@endif									
									>{{ $category->title }}</option>
							@endforeach
						</select>
						<p class="inline text-xs text-gray-700 mr-4">
							Total Instock Items: <span id='instocks'>N/A</span>
						</p>
						<p class="inline text-xs text-gray-700 mr-4">
							Last Stock Price: <span id='unit'>N/A</span>
						</p>
						@error('stock_category_id')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="w-full flex my-5">
					<label for="qty" class="w-1/3">အရေအတွက်</label>
					<div class="w-2/3">
						<input 
						class="@error('qty') invalid @enderror w-full"  
						type="number" 
						value="{{ old('qty' , isset($sale) ? $sale->qty : '') }}" 
						id="qty" 
						name="qty">
						@error('qty')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="w-full flex my-5">
					<label for="price" class="w-1/3">ဈေးနှုန်း</label>
					<div class="w-2/3">
						<input 
						class="@error('price') invalid @enderror w-full"  
						type="number" 
						value="{{ old('price' , isset($sale) ? $sale->price : '') }}" 
						id="price" 
						name="price">
						@error('price')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="w-full flex my-5">
					<label for="total" class="w-1/3">ကျသင့်ငွေ</label>
					<div class="w-2/3">
						<input 
						class="@error('total') invalid @enderror w-full"  
						type="number" 
						value="{{ old('total' , isset($sale) ? $sale->total : '') }}" 
						id="total" 
						name="total"
						disabled>
						@error('total')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>

				<div class="w-full flex my-5">
					<label for="customer" class="w-1/3">Customer</label>
					<div class="w-2/3">
						<input 
						class="@error('customer') invalid @enderror w-full"  
						type="text" 
						value="{{ old('customer' , isset($sale) ? $sale->customer : '') }}" 
						id="customer" 
						name="customer">
						@error('customer')
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
							>{{ old('remark', isset($sale) ? $sale->remark : '') }}</textarea>
						@error('remark')
						<p class="invalid">{{ $message }}</p>
						@enderror
					</div>
				</div>
				{{-- {{ $sale->remark }} --}}

				<div class="w-full flex justify-end my-5">
					<a href="{{ route('stocks.index') }}" class="cancel">Cancel</a>
					<button type="submit" class="submit">Submit</button>
				</div>
			</form>
		@endslot
 	@endcomponent

@endsection

@push('scripts')
	<script>
		$(document).ready(function() {

			$('#stock_category_id').on('change', function() {
				var instock = $("option:selected", $(this)).data('instock');
				var unit = $("option:selected", $(this)).data('unit');
				$('#instocks').html(instock);
				$('#unit').html(unit);
			});						
			
			var qty = $('#qty').val();
			var price = $('#price').val();

			$('#qty,#price').on('input', function() {
				calc();
			});

			if(qty.length > 0 && price.length > 0) {
				calc();
			}			

			function calc() {
				$('#total').val($('#qty').val() * $('#price').val());			
			}
		});
	</script>
@endpush