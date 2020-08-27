@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            ပစ္စည်းအမျိုးအစားများ
        @endslot
        @slot('new')
            {{ route('stock-categories.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th>ID</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">အမျိုးအစား</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">မှတ်ချက်</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($stockCategories as $category)
                <tr>
                    <td class="text-left py-3 px-4">{{ $category->id }}</td>
                    <td class="text-left py-3 px-4">{{ $category->title }}</td>
                    <td class="text-left py-3 px-4">{{ $category->remark }}</td>
                    <td class="whitespace-no-wrap">
                        <a class="edit text-xs" href="{{ route('stock-categories.edit', $category) }}">
                            Edit
                        </a>
                        <form action="{{ route('stock-categories.destroy', $category) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            {{-- <button class="delete text-xs">Delete</button> --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection