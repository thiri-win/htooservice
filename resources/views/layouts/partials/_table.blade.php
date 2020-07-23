<div class="flex justify-between items-center">
    <h1 class="text-xl text-black pb-3">
        {{ $heading }}
    </h1>
    <a href="{{ $new }}" class="bg-blue-500 hover:bg-blue-400 px-3 py-2 rounded">New</a>
</div>

<div class="w-full mt-3 shadow-lg">
    <div class="bg-white overflow-auto p-6">
        <table class="min-w-full bg-white py-6" id="myTable">
            <thead class="bg-gray-700 text-white">
                {{ $thead }}
            </thead>
            <tbody class="text-gray-700">
                {{ $tbody }}
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush