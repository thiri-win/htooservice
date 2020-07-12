@extends('master')

@section('content')
    @component('layouts._table')
        @slot('new')
            <a href="{{ route('experiences.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                New Record
            </a>
        @endslot
        @slot('title')
            Experience Setting
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
        @foreach ($experiences as $experience)
                <tr>
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->level }}</td>
                    <td>{{ $experience->updated_at->diffForHumans() }}</td>
                    <td nowrap class="d-flex justify-content-around">
                        <a class="btn btn-sm border btn-warning" href="{{ route('experiences.edit', $experience) }}">Edit</a>
                        <a class="btn btn-sm border btn-danger" href="{{ route('experiences.destroy', $experience) }}">Delete</a>
                    </td>
                </tr>                
            @endforeach
        @endslot
    @endcomponent
@endsection