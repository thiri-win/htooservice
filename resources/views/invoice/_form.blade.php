@extends('master')
@section('content')
    @component('layouts._form')
        @slot('title')
            Create New Invoice
        @endslot
        @slot('form')
            <div class="kt-portlet__body">
                <div class="row">
                    <div class="form-group col-md-4 col-sm-6">
                        <label for="date">Date :</label>
                        <input
                            type="date"
                            name="date"
                            id="date"
                            value="{{ old('date', date('Y-m-d')) }}"
                            class="form-control @error('date') is-invalid @enderror"
                        >
                        @error('date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label for="client">Client :</label>
                        <input
                            type="text"
                            name="client"
                            id="client"
                            value="{{ old('client') }}"
                            class="form-control @error('client') is-invalid @enderror"
                            placeholder="Client Name"
                        >
                        @error('client')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label for="phone">Phone :</label>
                        <input
                            type="text"
                            name="phone"
                            id="phone"
                            value="{{ old('phone') }}"
                            class="form-control @error('phone') is-invalid @enderror"
                            placeholder="Phone Number"
                        >
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label for="car_make">Car Make :</label>
                        <input
                            type="text"
                            name="car_make"
                            id="car_make"
                            value="{{ old('car_make') }}"
                            class="form-control @error('car_make') is-invalid @enderror"
                            placeholder="Car Make"
                        >
                        @error('car_make')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label for="car_no">Car No :</label>
                        <input
                            type="text"
                            name="car_no"
                            id="car_no"
                            value="{{ old('car_no') }}"
                            class="form-control @error('car_no') is-invalid @enderror"
                            placeholder="Car No"
                        >
                        @error('car_no')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <label for="car_model">Car Model :</label>
                        <input
                            type="text"
                            name="car_model"
                            id="car_model"
                            value="{{ old('car_model') }}"
                            class="form-control @error('car_model') is-invalid @enderror"
                            placeholder="Car Model"
                        >
                        @error('car_model')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
            <hr>

        @endslot
    @endcomponent
@endsection
