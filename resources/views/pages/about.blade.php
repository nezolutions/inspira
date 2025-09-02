<div class="flex flex-col items-center justify-center w-full py-16 min-h-screen bg-transparent">
    <div class="flex flex-col items-center w-full max-w-7xl px-4">
        <div class="flex flex-col items-center justify-center mb-6">
            <h2 class="text-3xl lg:text-4xl text-center font-bold mb-2">What is {{ $app->app_name }}?</h2>
            <div class="w-24 h-1 bg-red-600 rounded-full"></div>
        </div>
        <div class="w-full flex flex-col lg:flex-row items-center gap-4 lg:gap-10">
            <img class="w-60 lg:w-80 select-none pb-6 lg:pb-20" draggable="false" src="{{ $about->logo }}">
            <p class="text-gray-700 text-sm lg:text-lg text-justify">
                <span class="ms-6 lg:ms-12 font-semibold">{{ $app->app_name }}</span> {{ $about->content }}
            </p>
        </div>
        <div class="w-full flex flex-col gap-2 mt-5 lg:mt-0">
            <div class="flex items-center gap-1 text-lg lg:text-xl font-bold italic text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                </svg>
                EVENT HIGHLIGHTS
            </div>
            <ul class="w-fit bg-gray-700 p-4 text-sm tracking-wide lg:text-base rounded-lg text-white">
                <li class="list-disc list-inside">International Strategic Forum</li>
                <li class="list-disc list-inside">International Oral Presentation & Poster Competition</li>
            </ul>
        </div>
    </div>
    @auth
        <div class="relative top-10 w-fit z-10 text-lg">
            <a href="{{ url('e/about') }}" class="flex items-center text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 px-4 py-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="2" fill="currentColor" class="size-5 me-2">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
</div>