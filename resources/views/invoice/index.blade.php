@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            Invoices
        @endslot
        @slot('new')
            {{ route('invoices.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Client</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Car Make</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Car Model</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Grand Total</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($invoices as $invoice)
                <tr>
                    <td class="text-left py-3 px-4">{{ $invoice->id }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->date }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->client }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->phone }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->car_make }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->car_model }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->grand_total }}</td>
                    <td>
                        <a class="bg-blue-500 hover:bg-blue-400 p-1 rounded mr-1" href="{{ route('invoices.edit', $invoice) }}">
                            Edit
                        </a>
                        <a class="bg-red-500 hover:bg-red-400 p-1 rounded" href="{{ route('invoices.destroy', $invoice) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection