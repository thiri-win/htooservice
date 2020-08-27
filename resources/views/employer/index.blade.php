@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            ဝန်ထမ်းများ
        @endslot
        @slot('new')
            {{ route('employers.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NRC</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($employers as $employer)
                <tr>
                    <td class="text-left py-3 px-4">{{ $employer->id }}</td>
                    <td class="text-left py-3 px-4">
                        <a href="{{ route('employers.show', $employer) }}">
                            {{ $employer->name }}
                        </a>
                    </td>
                    <td class="text-left py-3 px-4">{{ $employer->nrc }}</td>
                    <td class="text-left py-3 px-4">{{ $employer->phone }}</td>
                    <td class="whitespace-no-wrap">
                        <a class="edit text-xs" href="{{ route('employers.edit', $employer) }}">
                            Edit
                        </a>
                        <a class="delete text-xs" href="{{ route('employers.destroy', $employer) }}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection