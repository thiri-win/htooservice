@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            အမျိုးအစားများ
        @endslot
        @slot('new')
            {{ route('expense-categories.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Category</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Updated_At</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($expenseCategories as $category)
                <tr>
                    <td class="text-left py-3 px-4">{{ $category->id }}</td>
                    <td class="text-left py-3 px-4">{{ $category->title }}</td>
                    <td class="text-left py-3 px-4">{{ $category->updated_at->diffForHumans() }}</td>
                    <td class="whitespace-no-wrap">
                        <a class="edit text-xs" href="{{ route('expense-categories.edit', $category) }}">
                            Edit
                        </a>
                        <a class="delete text-xs" href="{{ route('expense-categories.destroy', $category) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection