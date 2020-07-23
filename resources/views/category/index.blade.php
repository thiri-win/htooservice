@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            အမျိုးအစားများ
        @endslot
        @slot('new')
            {{ route('categories.create') }}
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
            @foreach ($categories as $category)
                <tr>
                    <td class="text-left py-3 px-4">{{ $category->id }}</td>
                    <td class="text-left py-3 px-4">{{ $category->title }}</td>
                    <td class="text-left py-3 px-4">{{ $category->updated_at->diffForHumans() }}</td>
                    <td>
                        <a class="bg-blue-500 hover:bg-blue-400 p-1 rounded mr-1" href="{{ route('categories.edit', $category) }}">
                            Edit
                        </a>
                        <a class="bg-red-500 hover:bg-red-400 p-1 rounded" href="{{ route('categories.destroy', $category) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection