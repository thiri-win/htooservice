@extends('master')

@section('content')

    @component('layouts.partials._table')
        @slot('heading')
            ပစ္စည်းအဝယ်စာရင်း
        @endslot
        @slot('new')
            {{ route('sales.create') }}
        @endslot
        @slot('thead')
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">နေ့စွဲ</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">အမျိုးအစား</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">အရေအတွက်</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">နှုန်း</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ကျသင့်ငွေ</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ဈေးဝယ်သူ</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">မှတ်ချက်</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
            </tr>
        @endslot
        @slot('tbody')
            @foreach ($sales as $sale)
                <tr>
                    <td class="text-left py-3 px-4">{{ $sale->date->format('d/m/Y') }}</td>
                    <td class="text-left py-3 px-4">{{ $sale->category->title }}</td>
                    <td class="text-right py-3 px-4">{{ $sale->qty }}</td>
                    <td class="text-right py-3 px-4">{{ $sale->price }}</td>
                    <td class="text-right py-3 px-4">{{ $sale->total }}</td>
                    <td class="text-left py-3 px-4">{{ $sale->customer }}</td>
                    <td class="text-left py-3 px-4">{{ $sale->remark }}</td>
                    <td class="whitespace-no-wrap">
                        <a class="edit text-xs" href="{{ route('sales.edit', $sale) }}">
                            Edit
                        </a>
                        <form action="{{ route('sales.destroy', $sale) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete text-xs">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection