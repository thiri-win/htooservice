@extends('master')

@section('content')
    <div class="container">
        <div class="bg-white w-full p-6 shadow-lg">

            <div class="flex flex-wrap">

                <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                    <label for="date" class="w-1/3">နေ့စွဲ</label>
                    <div class="w-2/3">
                        <p>{{ $invoice->date }}</p>
                    </div>
                </div>

                <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                    <label for="client" class="w-1/3">Client</label>
                    <div class="w-2/3">
                        <p>{{ $invoice->client }}</p>
                    </div>
                </div>

                <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                    <label for="car_make" class="w-1/3">Car Make</label>
                    <div class="w-2/3">
                        <p>{{ $invoice->car_make }}</p>
                    </div>
                </div>

                <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                    <label for="car_no" class="w-1/3">Car NO.</label>
                    <div class="w-2/3">
                        <p>{{ $invoice->car_no }}</p>
                    </div>
                </div>

                <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                    <label for="car_model" class="w-1/3 min-w-0">Car Model</label>
                    <div class="w-2/3">
                        <p>{{ $invoice->car_model }}</p>
                    </div>
                </div>

                <div class="flex w-full sm:w-full md:w-1/2 lg:w-1/3 p-2">
                    <label for="phone" class="w-1/3">Phone</label>
                    <div class="w-2/3">
                        <p>{{ $invoice->phone }}</p>
                    </div>
                </div>

            </div>

            <table class="w-full border mx-2">
                <thead class="border">
                    <tr>
                        <td>Description</td>
                        <td>Quantity</td>
                        <td>Unit Price</td>
                        <td>Total</td>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($invoice->details as $detail)
                        <tr>
                            <td>{{ $detail->stocks->title ?? $detail->description  }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>{{ $detail->unit_price }}</td>
                            <td>{{ $detail->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="w-full flex px-4 py-2 mt-2">
                <label for="sub_total" class="w-1/3">Sub Total</label>
                <div class="w-2/3">
                    <p>{{ $invoice->sub_total }}</p>
                </div>
            </div>

            <div class="w-full flex px-4 py-2">
                <label for="advanced" class="w-1/3">Advanced</label>
                <div class="w-2/3">
                    <p>{{ $invoice->advanced }}</p>
                </div>
            </div>

            <div class="w-full flex px-4 py-2">
                <label for="discount" class="w-1/3">Discount</label>
                <div class="w-2/3">
                    <p>{{ $invoice->discount }}</p>
                </div>
            </div>

            <div class="w-full flex px-4 py-2">
                <label for="grand_total" class="w-1/3">Grand_Total</label>
                <div class="w-2/3">
                    <p>{{ $invoice->grand_total }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection