@if (session('info'))
    <div class="bg-green-300 px-2 py-4 rounded alert lg:w-1/5 md:w-full">
        {{ session('info') }}
    </div>
@endif