@extends('master')

@section('content')

    @component('layouts.partials._form')

        @slot('heading')
            {{ isset($category) ? 'Category Edit Form' : 'New Category Form'}}
        @endslot

        @slot('form')

            <form 
                action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}"
                method="post">

                @csrf
                @isset($category)
                    @method('PUT')
                @endisset

                <div class="container">

                    <div class="w-full flex my-2">
                        <label for="title" class="w-1/3">Title :</label>
                        <div class="w-2/3">
                            <input
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title', $category->title ?? '') }}"
                            class="form-control @error('title') is-invalid @enderror"
                            placeholder="Title"
                            autofocus>
                            @error('title')
                                <p class="invalid">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full flex my-2">
                    <a href="{{ route('categories.index') }}" class="cancel">Cancel</a>
                    <button type="submit" class="submit">Submit</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
