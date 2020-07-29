<header class="w-full flex items-center bg-white py-2 px-6 hidden sm:flex">
    <div class="w-1/2"></div>
    <div class="relative w-1/2 flex justify-end">
    @guest
        <a href="{{ route('login') }}" class="py-2">Login</a>        
    @else
        <div class="w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300">
            <img src="{{ asset('assets/media/users/default-user.jpg') }}" alt="User">
        </div>
        <form action="{{ route('logout') }}" method="post" class="ml-4">
            @csrf
            <button type="submit" class="p-2 border border-gray-400 hover:border-gray-300 rounded">LogOut</button>
        </form>
    @endguest
    </div>
</header>