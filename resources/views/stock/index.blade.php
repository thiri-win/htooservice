@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            ပစ္စည်းအဝယ်စာရင်း
        @endslot
        @slot('new')
            {{ route('stocks.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">နေ့စွဲ</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">အမျိုးအစား</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">အရေအတွက်</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">နှုန်း</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ကျသင့်ငွေ</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Supplier</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">မှတ်ချက်</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($stocks as $stock)
                <tr>
                    <td class="text-left py-3 px-4">{{ $stock->date->format('d/m/Y') }}</td>
                    <td class="text-left py-3 px-4">{{ $stock->category->title }}</td>
                    <td class="text-right py-3 px-4">{{ $stock->qty }}</td>
                    <td class="text-right py-3 px-4">{{ $stock->price }}</td>
                    <td class="text-right py-3 px-4">{{ $stock->total }}</td>
                    <td class="text-left py-3 px-4">{{ $stock->supplier }}</td>
                    <td class="text-left py-3 px-4">{{ $stock->remark }}</td>
                    <td class="whitespace-no-wrap">
                        <a class="edit text-xs" href="{{ route('stocks.edit', $stock) }}">
                            Edit
                        </a>
                        <form action="{{ route('stocks.destroy', $stock) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="delete text-xs">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection