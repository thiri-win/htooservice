@extends('master')
@section('content')
    @component('layouts._form')
        @slot('title')
            {{ isset($category) ? 'Category Edit Form' : 'New Category Form'}}
        @endslot
        @slot('form')
            <form class="kt-form"
                action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}"
                method="post">
                @csrf
                @isset($category)
                    @method('PUT')
                @endisset
                <div class="kt-portlet__body">
                    <div class="form-group">
                        <label for="title">Title :</label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title', $category->title ?? '') }}"
                            class="form-control @error('title') is-invalid @enderror"
                            placeholder="Title"
                        >
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
