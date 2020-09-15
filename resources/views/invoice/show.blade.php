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
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($invoice->sales as $sale)
                        <tr>
                            <td>{{ $sale->category->title }}</td>
                            <td class="text-center">{{ $sale->quantity }}</td>
                            <td class="text-right pr-16">{{ $sale->unit_price }}</td>
                            <td class="text-right pr-16">{{ $sale->total }}</td>
                        </tr>
                    @endforeach
                    @foreach ($invoice->details as $detail)
                        <tr>
                            <td>{{ $detail->description  }}</td>
                            <td class="text-center">{{ $detail->quantity }}</td>
                            <td class="text-right pr-16">{{ $detail->unit_price }}</td>
                            <td class="text-right pr-16">{{ $detail->total }}</td>
                        </tr>
                    @endforeach
                </tbody>

                <tfoot class="border">
                    <tr>
                        <td colspan="3">Sub Total</td>
                        <td class="text-right pr-16">{{ $invoice->sub_total }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Advanced</td>
                        <td class="text-right pr-16">{{ $invoice->advanced }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Discount</td>
                        <td class="text-right pr-16">{{ $invoice->discount }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Grand_Total</td>
                        <td class="text-right pr-16">{{ $invoice->grand_total }}</td>
                    </tr>
                </tfoot>

            </table>
            <div class="w-full flex justify-end my-5">
                <a href="{{ route('invoices.index') }}" class="cancel">Back</a>
            </div>
        </div>
    </div>
@endsection