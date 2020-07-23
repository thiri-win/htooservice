@extends('master')

@section('content')

    @component('layouts.partials._form')

        @slot('heading')
            {{ isset($expense) ? 'Expense Edit Form' : 'New Expense Form'}}
        @endslot

        @slot('form')
            <form
                action="{{ isset($expense) ? route('expenses.update', $expense) : route('expenses.store') }}"
                method="post">

                @csrf
                @isset($expense)
                    @method('PUT')
                @endisset
                
                <div class="container">

                    <div class="w-full flex my-5">
                        <label for="date" class="w-1/3">Date :</label>
                        <div class="w-2/3">
                            <input
                            type="date"
                            name="date"
                            id="date"
                            value="{{ old('date', $expense->date ?? date('Y-m-d')) }}"
                            class="border-1 @error('date') border-red-500 @enderror"
                            placeholder="date">
                            @error('date')
                                <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full flex  my-5">
                        <label for="title" class="w-1/3">Title :</label>
                        <div class="w-2/3">
                            <input
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title', $expense->title ?? '') }}"
                            class="@error('title') border-red-500 @enderror"
                            placeholder="Title"
                            autofocus
                        >
                        @error('title')
                            <p class="invalid">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="w-full flex my-5">
                        <label for="body" class="w-1/3">Remark :</label>
                        <div class="w-2/3">
                            <textarea
                            name="body"
                            id="body"
                            cols="30"
                            rows="5"
                            class="w-2/3"
                            placeholder="Remark">{{ old('body', $expense->body ?? '') }}</textarea>
                            @error('body')
                                <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full flex my-5">
                        <label for="category_id" class="w-1/3">Category</label>
                        <div class="w-2/3">
                            <select class="w-2/3" name="category_id">
                                <option value="" selected>--Choose--</option>
                                @foreach (App\Category::all() as $type)
                                    <option
                                        value="{{ $type->id }}"
                                        @if (isset($expense))
                                            {{ $type->id == $expense->category_id ? 'selected' : '' }}
                                        @else
                                            {{ old('category_id') == $type->id ? 'selected' : ''}}
                                        @endif
                                        >{{ $type->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full flex my-5">
                        <label for="amount" class="w-1/3">Amount :</label>
                        <div class="w-2/3">
                            <input
                            type="number"
                            name="amount"
                            id="amount"
                            value="{{ old('amount', $expense->amount ?? '') }}"
                            class="w-2/3"
                            placeholder="Amount">
                            @error('amount')
                                <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="w-full mt-5">
                    <a href="{{ route('expenses.index') }}" class="cancel">Cancel</a>
                    <button type="submit" class="submit">Submit</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
