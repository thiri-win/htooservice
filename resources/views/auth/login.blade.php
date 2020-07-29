@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-full max-w-xs py-32">

        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('login') }}">
            @csrf
    
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
              Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" value="{{ old('email') }}" name="email">
            @error('email')
                <p class="invalid">{{ $message }}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
              Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" autocomplete="current-password" name="password">
            @error('password')
                <p class="invalid">{{ $message }}</p>
            @enderror
          </div>
    
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Sign In
            </button>
            {{-- <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
              Forgot Password?
            </a> --}}
          </div>
        </form>
        
    </div>
</div>
@endsection

