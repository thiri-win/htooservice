@extends('master')

@section('content')
    @component('layouts._table')
        @slot('new')
            <a href="{{ route('categories.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                New Record
            </a>
        @endslot
        @slot('title')
            Expense Type Setting
        @endslot
        @slot('table_head')
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Updated_At</th>
                <th></th>
            </tr>
        @endslot
        @slot('table_body')
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach

        @endslot
    @endcomponent
@endsection
