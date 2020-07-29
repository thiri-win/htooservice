<div class="w-full">
    <div class="lg:flex lg:justify-between lg:items-center mb-2">
        <h1 class="text-xl text-black py-4">        
            {{ $heading }}
        </h1>
        @include('layouts.partials._flash')
    </div>
    
    <div class="container bg-white w-full p-6 shadow-lg">
        {{ $form }}
    </div>
</div>

@push('scripts')
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $("div.alert").remove();
            }, 3000 );      
        });
    </script>    
@endpush