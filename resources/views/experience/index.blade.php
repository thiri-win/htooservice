@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            Experience Setting
        @endslot
        @slot('new')
            {{ route('experiences.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Level</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Updated_At</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($experiences as $experience)
                <tr>
                    <td class="text-left py-3 px-4">{{ $experience->id }}</td>
                    <td class="text-left py-3 px-4">{{ $experience->level }}</td>
                    <td class="text-left py-3 px-4">{{ $experience->updated_at->diffForHumans() }}</td>
                    <td>
                        <a class="bg-blue-500 hover:bg-blue-400 p-1 rounded mr-1" href="{{ route('experiences.edit', $experience) }}">
                            Edit
                        </a>
                        <a class="bg-red-500 hover:bg-red-400 p-1 rounded" href="{{ route('experiences.destroy', $experience) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection