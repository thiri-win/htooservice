@extends('master')

@section('content')
    @component('layouts._table')
        @slot('new')
            <a href="{{ route('expenses.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                New Record
            </a>
        @endslot
        @slot('title')
            Expenses List
        @endslot
        @slot('table_head')
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Title</th>
                <th>Remark</th>
                <th>Category</th>
                <th>Amount</th>
                <th></th>
            </tr>
        @endslot
        @slot('table_body')
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->id }}</td>
                    <td nowrap>{{ $expense->date }}</td>
                    <td>{{ $expense->title }}</td>
                    <td>{{ $expense->body ?? '-' }}</td>
                    <td>{{ $expense->category->title }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td nowrap>
                        <a class="btn btn-sm btn-warning" href="{{ route('expenses.edit', $expense) }}">Edit</a>
                        {{-- <a class="btn btn-sm btn-danger" href="{{ route('expenses.destroy', $expense) }}">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
