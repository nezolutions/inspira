<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-50">
    <div class="flex flex-col items-center w-full max-w-7xl px-6">
        
        <!-- Title -->
        <div class="flex flex-col items-center justify-center mb-10">
            <h2 class="text-3xl xl:text-5xl font-extrabold text-gray-800 text-center tracking-tight mb-4">
                What is <span class="text-red-600">{{ $app ? $app->app_name[0] . ' ' . $app->app_name[1] : 'JGU-WXUT INSPIRA ' . now()->format('Y') }}</span>?
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <!-- Content -->
        <div class="w-full flex flex-col xl:flex-row items-center gap-10 bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg">
            <img class="w-56 xl:w-80 py-8 select-none drop-shadow-lg rounded-lg" draggable="false" src="{{ $about->cover ?? asset('images/cover.png') }}">
            <p class="text-gray-600 text-base xl:text-lg text-justify">
                <span class="ms-6 xl:ms-12 font-semibold text-gray-800">{{ $app ? $app->app_name[0] . ' ' . $app->app_name[1] : 'JGU-WXUT INSPIRA ' . now()->format('Y') }}</span>
                {!! $about->content ?? 'is a premier academic platform organized by Jakarta Global University (JGU) that brings together emerging researchers, scholars, and innovators to showcase their ideas and insights in the fields of science, technology, business, and health. Under the theme “International Forum on Innovation, Strategy, and Presentation of Research title," this event aims to foster interdisciplinary collaboration, spark future-oriented thinking, and strengthen the research culture among the academic community. Through a dynamic combination of strategic forums, keynote lectures, and a competitive poster presentation, JGU INSPIRA serves as a catalyst for knowledge exchange, academic excellence, and impactful innovation aligned with global challenges and sustainable development goals (SDGs).' !!}
            </p>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 items-start gap-4 w-full max-w-5xl">
            <div class="w-full flex flex-col gap-4 mt-10">
                <div class="flex items-center gap-2 text-xl xl:text-2xl font-semibold italic text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600">
                        <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                    </svg>
                    EVENT HIGHLIGHTS
                </div>
                
                <ul class="w-full bg-gradient-to-r from-gray-800 to-gray-700 shadow-xl p-6 rounded-xl text-white space-y-4">
                    <li class="flex items-center text-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-red-300 hidden xl:inline">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                        </svg>
                        <span class="inline xl:hidden">-</span>
                        {{ $about->highlights[0] ?? 'International Strategic Forum' }}
                    </li>
                    <li class="flex items-center text-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-red-300 hidden xl:inline">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                        </svg>
                        <span class="inline xl:hidden">-</span>
                        {{ $about->highlights[1] ?? 'International Oral Presentation & Poster Competition' }}
                    </li>
                </ul>
            </div>
            <div class="w-full flex flex-col gap-4 mt-10">
                <div class="flex items-center gap-2 text-xl xl:text-2xl font-semibold italic text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600">
                        <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                    </svg>                     
                    EVENT VENUE
                </div>
                
                <ul class="w-full bg-gradient-to-r from-gray-800 to-gray-700 shadow-xl p-6 rounded-xl text-white">
                    <li class="flex items-center text-base">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-300 me-2 hidden xl:inline">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg> 
                        {!! $about->venue ?? 'Jakarta Global University Ballroom | October 20-22 2025' !!}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @auth
        <div class="mt-10 flex justify-center">
            <a href="{{ url('e/about')}}" class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base xl:text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
</div>
