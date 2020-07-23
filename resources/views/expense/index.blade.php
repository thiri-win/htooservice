@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            ကုန်ကျစရိတ်များ
        @endslot
        @slot('new')
            {{ route('expenses.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Category</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Amount</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($expenses as $expense)
                <tr>
                    <td class="text-left py-3 px-4">{{ $expense->id }}</td>
                    <td class="text-left py-3 px-4">{{ $expense->date->format('d/m/Y') }}</td>
                    <td class="text-left py-3 px-4">{{ $expense->title }}</td>
                    <td class="text-left py-3 px-4">{{ $expense->category->title }}</td>
                    <td class="text-left py-3 px-4">{{ $expense->amount}}</td>
                    <td>
                        <a class="bg-blue-500 hover:bg-blue-400 p-1 rounded mr-1" href="{{ route('expenses.edit', $expense) }}">
                            Edit
                        </a>
                        <a class="bg-red-500 hover:bg-red-400 p-1 rounded" href="{{ route('expenses.destroy', $expense) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection