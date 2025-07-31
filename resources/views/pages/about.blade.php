<div class="flex flex-col items-center justify-center w-full py-16 lg:py-0 min-h-screen bg-transparent">
    <div class="flex flex-col items-center gap-3 lg:space-y-0 w-full max-w-7xl">
        <div class="flex flex-col items-center justify-center my-6">
            <h2 class="text-3xl lg:text-4xl font-bold mb-2">What is {{ $ac }} {{ $app_name }}?</h2>
            <div class="w-24 h-1 bg-red-600 rounded-full"></div>
        </div>
        <div class="flex flex-col lg:flex-row items-center mx-6">
            <img class="w-70 lg:w-80 pb-18 select-none" draggable="false" src="{{ $logo }}">
            <p class="text-gray-700 text-md leading-6 lg:leading-7 lg:text-xl text-justify max-w-3xl ms-0 lg:ms-16">
                <span class="ms-6 lg:ms-12 font-semibold">{{ $ac }} {{ $app_name }}</span> {{ $content }}
            </p>
        </div>
    </div>
    @if (auth()->check())
        <div class="relative top-10 w-fit z-10 text-lg">
            <a href="{{ url('e/about') }}" class="flex items-center text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 px-4 py-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 me-2">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endif
</div>