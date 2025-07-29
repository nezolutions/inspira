@if (auth()->check())
<div class="fixed w-full flex justify-center bottom-18 lg:bottom-4 z-50 select-none">
    <div class="bg-gray-700 w-4/5 max-w-4xl flex items-center justify-between shadow-2xl ps-4 border border-gray-600 rounded-lg">
        <p class="text-sm lg:text-lg text-white font-light">Welcome back! <span class="font-medium">{{ auth()->user()->name }}</span>.</p>
        <div class="flex items-center">
            <a href="{{ url('e/user')}}" class="text-white px-4 py-2 border-s-1 border-gray-600 hover:bg-gray-800 text-sm lg:text-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 me-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                User Settings
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center border-s-1 border-gray-600 hover:bg-gray-800 cursor-pointer text-white px-4 py-2 rounded-e-lg text-sm lg:text-lg transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
                      </svg>                      
                      Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endif