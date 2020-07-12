@extends('master')

@section('content')
    @component('layouts._table')
        @slot('new')
            <a href="{{ route('employers.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                New Record
            </a>
        @endslot
        @slot('title')
            ဝန်ထမ်းများ
        @endslot
        @slot('table_head')
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NRC</th>
                <th>Phone</th>
                <th></th>
            </tr>
        @endslot
        @slot('table_body')
        @foreach ($employers as $employer)
                <tr>
                    <td>{{ $employer->id }}</td>
                    <td>{{ $employer->name }}</td>
                    <td>{{ $employer->nrc }}</td>
                    <td>{{ $employer->phone }}</td>
                    <td nowrap class="d-flex justify-content-around">
                        <a class="btn btn-sm border btn-warning" href="{{ route('employers.edit', $employer) }}">Edit</a>
                        <a class="btn btn-sm border btn-danger" href="{{ route('employers.destroy', $employer) }}">Delete</a>
                    </td>
                </tr>                
            @endforeach
        @endslot
    @endcomponent
@endsection