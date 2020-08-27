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
                    <td class="text-left py-3 px-4">
                        <a href="{{ route('invoices.show', $invoice) }}">{{ $invoice->date }}</a>
                    </td>                    
                    <td class="text-left py-3 px-4">{{ $invoice->client }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->phone }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->car_make }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->car_model }}</td>
                    <td class="text-left py-3 px-4">{{ $invoice->grand_total }}</td>
                    <td class="whitespace-no-wrap">
                        <a class="edit text-xs" href="{{ route('invoices.edit', $invoice) }}">
                            Edit
                        </a>
                        <a class="delete text-xs" href="{{ route('invoices.destroy', $invoice) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection