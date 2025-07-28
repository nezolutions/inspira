@if (auth()->check())
<div class="fixed w-full flex justify-center bottom-18 lg:bottom-4 z-50 select-none">
    <div class="bg-gray-700 w-4/5 max-w-4xl flex items-center justify-between shadow-2xl ps-4 border border-gray-600 rounded-lg">
        <p class="text-sm lg:text-lg text-white font-light">Welcome back! <span class="font-medium">{{ auth()->user()->name }}</span>.</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center border-s-1 border-gray-600 hover:bg-gray-800 cursor-pointer text-white px-4 py-2 rounded-e-lg text-sm lg:text-lg transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 lg:size-5 me-2">
                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v9a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM6.166 5.106a.75.75 0 0 1 0 1.06 8.25 8.25 0 1 0 11.668 0 .75.75 0 1 1 1.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg>
                  Logout
            </button>
        </form>
    </div>
</div>
@endif