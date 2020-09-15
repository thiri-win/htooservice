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
                        <label for="expense_category_id" class="w-1/3">Category</label>
                        <div class="w-2/3">
                            <select class="w-2/3" name="expense_category_id">
                                <option value="" selected>--Choose--</option>
                                @foreach (App\ExpenseCategory::all() as $type)
                                    <option
                                        value="{{ $type->id }}"
                                        @if (isset($expense))
                                            {{ $type->id == $expense->expense_category_id ? 'selected' : '' }}
                                        @else
                                            {{ old('expense_category_id') == $type->id ? 'selected' : ''}}
                                        @endif
                                        >{{ $type->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('expense_category_id')
                                <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full flex my-5">
                        <label for="total" class="w-1/3">Total :</label>
                        <div class="w-2/3">
                            <input
                            type="number"
                            name="total"
                            id="total"
                            value="{{ old('total', $expense->total ?? '') }}"
                            class="w-2/3"
                            placeholder="Amount">
                            @error('total')
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
