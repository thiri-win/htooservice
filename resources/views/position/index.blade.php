@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            Position Setting
        @endslot
        @slot('new')
            {{ route('positions.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Updated_At</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($positions as $position)
                <tr>
                    <td class="text-left py-3 px-4">{{ $position->id }}</td>
                    <td class="text-left py-3 px-4">{{ $position->jobtitle }}</td>
                    <td class="text-left py-3 px-4">{{ $position->updated_at->diffForHumans() }}</td>
                    <td class="whitespace-no-wrap">
                        <a class="edit text-xs" href="{{ route('positions.edit', $position) }}">
                            Edit
                        </a>
                        <a class="delete text-xs" href="{{ route('positions.destroy', $position) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection