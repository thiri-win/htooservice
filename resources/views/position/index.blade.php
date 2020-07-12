@extends('master')

@section('content')
    @component('layouts._table')
        @slot('new')
            <a href="{{ route('positions.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                New Record
            </a>
        @endslot
        @slot('title')
            Position Setting
        @endslot
        @slot('table_head')
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Updated_At</th>
                <th></th>
            </tr>
        @endslot
        @slot('table_body')
        @foreach ($positions as $position)
                <tr>
                    <td>{{ $position->id }}</td>
                    <td>{{ $position->jobtitle }}</td>
                    <td>{{ $position->updated_at->diffForHumans() }}</td>
                    <td nowrap class="d-flex justify-content-around">
                        <a class="btn btn-sm border btn-warning" href="{{ route('positions.edit', $position) }}">Edit</a>
                        <a class="btn btn-sm border btn-danger" href="{{ route('positions.destroy', $position) }}">Delete</a>
                    </td>
                </tr>                
            @endforeach
        @endslot
    @endcomponent
@endsection