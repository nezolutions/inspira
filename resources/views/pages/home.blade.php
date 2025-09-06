<div class="relative w-full min-h-screen bg-gray-800 bg-cover bg-no-repeat bg-center bg-fixed"
    style="background-image: url('{{ $home->background ?? 'images/background.png' }}');">
    <div class="absolute inset-0 bg-black/40 backdrop-blur-[3px]"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-gray-700/60 to-gray-900/90"></div>

    <div class="relative z-20 w-full min-h-screen flex flex-col items-center justify-center px-6">
        <div class="w-full max-w-7xl grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
            <div class="flex flex-col gap-4 text-center lg:text-start">
                <h1 class="text-5xl lg:text-8xl font-black bg-gradient-to-r from-red-700 via-red-600 to-red-500 bg-clip-text text-transparent tracking-tight drop-shadow-lg">
                    {{ $app->app_name[0] ?? 'JGU-WXUT ' }}
                </h1>
                <div class="flex items-center justify-center lg:justify-start">
                    <h2 class="text-4xl lg:text-7xl font-extrabold w-fit text-white drop-shadow-md tracking-wide bg-gradient-to-r from-red-700 via-red-600 to-red-500">
                        {{ $app->app_name[1] ?? 'INSPIRA ' . now()->format('Y') }}
                    </h2>
                </div>
                <p class="text-lg lg:text-2xl text-gray-200 font-medium leading-relaxed">
                    {!! $home->title ?? 'International Forum on Innovation, Strategy, and Presentation of Research Activity' !!}
                </p>
                <blockquote class="relative pl-4 border-l-4 border-red-500 text-sm lg:text-lg text-gray-300 italic">
                    {!! $home->description ?? 'Bridging engineering, business, and pharmaceutical expertise to advance technological innovation for global impact' !!}
                </blockquote>

                <div class="flex items-center justify-center lg:justify-start">
                    <a href="{{ $app->register ?? '#' }}" class="group mt-6 inline-flex items-center gap-2 px-6 py-3 rounded-full text-lg font-bold uppercase tracking-wide text-white bg-gradient-to-r from-red-600 to-red-500 hover:from-red-700 hover:to-red-600 shadow-lg shadow-red-800/40 transition-transform duration-300 hover:scale-105">
                        Register Now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        @auth
            <div class="mt-10 flex justify-center">
                <a href="{{ url('e/home')}}" class="flex items-center gap-2 text-white bg-gray-500 hover:bg-gray-600 transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                    </svg>
                    Edit
                </a>
            </div>
        @endauth
    </div>
</div>
