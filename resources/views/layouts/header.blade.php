<nav class="flex w-full fixed top-0 z-40 justify-center shadow-md select-none bg-white">
    <div class="w-full max-w-7xl flex flex-row justify-between items-center py-2 px-6">
        <a href="{{ route('main') }}">
            <x-logo :name="$app_name" :version="$app_version" :icon="$app_icon"></x-logo>
        </a>
        <ul class="hidden lg:flex flex-row items-center space-x-5">
            <li class="text-lg text-gray-600 hover:text-black font-semibold transition"><a href="#home">Home</a></li>
            <li class="text-lg text-gray-600 hover:text-black font-semibold transition"><a href="#about">About</a></li>
            <li class="text-lg text-gray-600 hover:text-black font-semibold transition"><a href="#agenda">Agenda</a></li>
            <li class="text-lg text-gray-600 hover:text-black font-semibold transition"><a href="#topics">Topics</a></li>
            <li class="text-lg text-gray-600 hover:text-black font-semibold transition"><a href="#category">Category</a></li>
            <li class="text-lg text-gray-600 hover:text-black font-semibold transition"><a href="#awards">Awards</a></li>
            <li class="text-lg text-gray-600 hover:text-black font-semibold transition"><a href="#fee">Fee</a></li>
            <li class="text-lg text-white font-medium bg-red-600 border border-red-500 hover:bg-red-700 rounded-full px-5 py-2 transition"><a href="{{ $register }}">Registration</a></li>
            @if (auth()->check())
            <li class="text-lg text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 flex items-center px-4 py-2 transition">
                <a href="{{ url('e/app') }}" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 me-2">
                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                    </svg>
                    Edit
                </a>
            </li>
            @endauth
        </ul>
    </div>
</nav>