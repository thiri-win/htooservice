@extends('master')

@section('content')
    @component('layouts._table')
        @slot('new')
            <a href="{{ route('invoices.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                New Invoice
            </a>
        @endslot
        @slot('title')
            Invoives
        @endslot
        @slot('table_head')
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Client</th>
                <th>Phone</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Grand Total</th>
                <th></th>
            </tr>
        @endslot
        @slot('table_body')
        @forelse ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>{{ $invoice->date }}</td>
                    <td>{{ $invoice->client }}</td>
                    <td>{{ $invoice->phone }}</td>
                    <td>{{ $invoice->car_make }}</td>
                    <td>{{ $invoice->car_model }}</td>
                    <td>{{ $invoice->grand_total }}</td>
                    <td nowrap class="d-flex justify-content-around">
                        <a class="btn btn-sm border btn-warning" href="{{ route('invoices.edit', $experience) }}">Edit</a>
                        <a class="btn btn-sm border btn-danger" href="{{ route('invoices.destroy', $experience) }}">Delete</a>
                    </td>
                </tr>      
            @empty
                <tr>
                    <td colspan="8" class="text-center">No Relevant Data.</td>
                </tr>
            @endforelse
        @endslot
    @endcomponent
@endsection