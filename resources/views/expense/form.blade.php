@extends('master')
@section('content')
    @component('layouts._form')
        @slot('title')
            {{ isset($expense) ? 'Expense Edit Form' : 'New Expense Form'}}
        @endslot
        @slot('form')
            <form class="kt-form"
                action="{{ isset($expense) ? route('expenses.update', $expense) : route('expenses.store') }}"
                method="post">
                @csrf
                @isset($expense)
                    @method('PUT')
                @endisset
                <div class="kt-portlet__body">
                    <div class="form-group">
                        <label for="date">Date :</label>
                        <input
                            type="date"
                            name="date"
                            id="date"
                            value="{{ old('date', $expense->date ?? date('Y-m-d')) }}"
                            class="form-control @error('date') is-invalid @enderror"
                            placeholder="date"
                        >
                        @error('date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Title :</label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title', $expense->title ?? '') }}"
                            class="form-control @error('title') is-invalid @enderror"
                            placeholder="Title"
                        >
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Remark :</label>
                        <textarea
                            name="body"
                            id="body"
                            cols="30"
                            rows="5"
                            class="form-control @error('body') is-invalid @enderror"
                            placeholder="Remark"
                        >{{ old('body', $expense->body ?? '') }}</textarea>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control kt-selectpicker" data-live-search="true" name="category_id">
                        <option value="" selected>--Choose--</option>
                            @foreach (App\Category::all() as $type)
                                <option
                                    value="{{ $type->id }}"
                                    @if (isset($expense))
                                        {{ $type->id == $expense->category_id ? 'selected' : '' }}
                                    @else
                                        {{ old('category_id') == $type->id ? 'selected' : ''}}
                                    @endif
                                    >{{ $type->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount :</label>
                        <input
                            type="number"
                            name="amount"
                            id="amount"
                            value="{{ old('amount', $expense->amount ?? '') }}"
                            class="form-control @error('amount') is-invalid @enderror"
                            placeholder="Amount"
                        >
                        @error('amount')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
