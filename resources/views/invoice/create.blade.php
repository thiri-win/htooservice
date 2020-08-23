@extends('master')

@section('content')
	@component('layouts.partials._form')

		@slot('heading')
			{{ isset($sale) ? 'Voucher Edit Form' : 'New Voucher'}}
		@endslot

		@slot('form')
			<form 
				action="{{ isset($sale) ? route('invoices.update', $sale->id) : route('invoices.store') }}" 
				method="POST">

				@csrf
				@if (isset($sale))
					@method('PUT')
                @endif
                
                <div class="flex flex-wrap">

                    <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                        <label for="date" class="w-1/3">နေ့စွဲ</label>
                        <div class="w-2/3">
                            <input 
                            class="w-full" 
                            type="date" 
                            value="{{ old('date' , isset($sale) ? $sale->date->format('Y-m-d') : date('Y-m-d')) }}" 
                            id="date" 
                            name="date">
                            @error('date')
                            <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                        <label for="client" class="w-1/3">Client</label>
                        <div class="w-2/3">
                            <input 
                            class="w-full" 
                            type="text" 
                            value="{{ old('client' , isset($sale) ? $sale->client : '') }}" 
                            id="client" 
                            name="client"
                            autofocus>
                            @error('client')
                            <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                        <label for="car_make" class="w-1/3">Car Make</label>
                        <div class="w-2/3">
                            <input 
                            class="w-full" 
                            type="text" 
                            value="{{ old('car_make' , isset($sale) ? $sale->car_make : '') }}" 
                            id="car_make" 
                            name="car_make">
                            @error('car_make')
                            <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                        <label for="car_no" class="w-1/3">Car NO.</label>
                        <div class="w-2/3">
                            <input 
                            class="w-full" 
                            type="text" 
                            value="{{ old('car_no' , isset($sale) ? $sale->car_no : '') }}" 
                            id="car_no" 
                            name="car_no">
                            @error('car_no')
                            <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                        <label for="car_model" class="w-1/3 min-w-0">Car Model</label>
                        <div class="w-2/3">
                            <input 
                            class="w-full" 
                            type="text" 
                            value="{{ old('car_model' , isset($sale) ? $sale->car_model : '') }}" 
                            id="car_model" 
                            name="car_model">
                            @error('car_model')
                            <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                        <label for="phone" class="w-1/3">Phone</label>
                        <div class="w-2/3">
                            <input 
                            class="w-full" 
                            type="text" 
                            value="{{ old('phone' , isset($sale) ? $sale->phone : '') }}" 
                            id="phone" 
                            name="phone">
                            @error('phone')
                            <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>

                <hr>
                @include('invoice._details')

                <div class="w-full flex px-4 py-2 mt-2">
                    <label for="sub_total" class="w-1/3">Sub Total</label>
                    <div class="w-2/3">
                        <input 
                        class="w-full" 
                        type="number" 
                        value="{{ old('sub_total' , isset($sale) ? $sale->sub_total : '') }}" 
                        id="sub_total" 
                        name="sub_total">
                        @error('sub_total')
                        <p class="invalid">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex px-4 py-2">
                    <label for="advanced" class="w-1/3">Advanced</label>
                    <div class="w-2/3">
                        <input 
                        class="w-full" 
                        type="number" 
                        value="{{ old('advanced' , isset($sale) ? $sale->advanced : '') }}" 
                        id="advanced" 
                        name="advanced">
                        @error('advanced')
                        <p class="invalid">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex px-4 py-2">
                    <label for="discount" class="w-1/3">Discount</label>
                    <div class="w-2/3">
                        <input 
                        class="w-full" 
                        type="number" 
                        value="{{ old('discount' , isset($sale) ? $sale->discount : '') }}" 
                        id="discount" 
                        name="discount">
                        @error('discount')
                        <p class="invalid">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex px-4 py-2">
                    <label for="grand_total" class="w-1/3">Grand_Total</label>
                    <div class="w-2/3">
                        <input 
                        class="w-full" 
                        type="number" 
                        value="{{ old('grand_total' , isset($sale) ? $sale->grand_total : '') }}" 
                        id="grand_total" 
                        name="grand_total">
                        @error('grand_total')
                        <p class="invalid">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
				<div class="w-full flex justify-end my-5">
					<a href="{{ route('invoices.index') }}" class="cancel">Cancel</a>
					<button type="submit" class="submit">Submit</button>
                </div>
                
			</form>
		@endslot
 	@endcomponent

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var postURL = "<?php echo url('addmore') ?>";
            var i = 2;

            $('#add_service').on('click', function() {
                i++;
                $('#dynamic_detail').append(
                    '<tr id="row'+i+'" class="dynamic-added"><td class="w-2/6"><input class="w-full" type="text" name="description[]"></td><td class="w-1/6"><input class="w-full" type="text" name="quantity[]"></td><td class="w-1/6"><input class="w-full" type="text" name="unit_price[]"></td><td class="w-1/6"><input class="w-full" type="text" name="total[]"></td><td><button type="button" name="remove" id="'+i+'" class="delete">X</button></td></tr>'
                );
            });

            $('#add_stock').on('click', function() {
                i++;
                $('#dynamic_detail').append(
                    '<tr id="row'+i+'" class="dynamic-added"><td class="w-2/6"><select class="w-full" name="description[]"><option value="">-- Choose --</option>@foreach($stock_categories as $category)<option value={{ $category->id }}>{{ $category->title }}</option>@endforeach</select></td><td class="w-1/6"><input class="w-full" type="text" name="quantity[]"></td><td class="w-1/6"><input class="w-full" type="text" name="unit_price[]"></td><td class="w-1/6"><input class="w-full" type="text" name="total[]"></td><td><button type="button" name="remove" id="'+i+'" class="delete">X</button></td></tr>'
                );
            });

            $(document).on('click', '.delete', function() {
                var btn_id = $(this).attr("id");
                $('#row'+btn_id+'').remove();
            });

            $('#dynamic_detail tbody tr').each(function() {
                $qty = $(this).text();
                console.log($qty);
            });

            
        });
    </script>
@endpush