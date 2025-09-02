<div class="relative z-0 w-full min-h-screen bg-gray-600 blur-xs bg-cover bg-no-repeat bg-center bg-fixed" style="background-image: url('{{ $home->background ?? 'images/background.png' }}');"></div>
<div class="absolute top-0 z-10 w-full min-h-screen bg-gradient-to-b from-gray-200/40 to-gray-600/90"></div>
<div class="absolute top-0 z-20 w-full min-h-screen flex flex-col items-center justify-center px-4">
    <div class="w-full max-w-7xl grid grid-cols-1 lg:grid-cols-2 items-center">
        <div class="flex flex-col gap-2 text-center lg:text-start">
            @php $judul = explode(' ', $app->app_name) @endphp
            <p class="text-5xl lg:text-8xl bg-gradient-to-r from-red-700 via-red-600 to-red-600 bg-clip-text font-black text-transparent">{{ $judul[0] ?? 'JGU-WXUT' }}</p>
            <p class="w-full lg:w-fit text-5xl lg:text-8xl bg-gradient-to-r from-red-700 via-red-600 to-red-600 text-white font-bold">{{ $judul[1] ?? 'INSPIRA' }} {{ $judul[2] ?? now()->format('Y') }}</p>
            <p class="text-lg lg:text-3xl text-white">{!! $home->title !!}</p>
            <q class="text-sm lg:text-lg text-white/75 italic">{!! $home->description !!}</q>
            <div class="flex items-center justify-center lg:justify-start">
                <a class="w-fit text-base lg:text-xl text-white hover:text-gray-200 bg-gradient-to-l from-red-700 to-red-600 hover:from-red-900 hover:to-red-700 px-4 py-2 lg:px-6 lg:py-3 mt-5 rounded-full uppercase tracking-wide font-bold flex items-center gap-1 transition" href="{{ $app->register ?? '#' }}">
                    Register Now
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 lg:size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>                  
                </a>
            </div>
        </div>
    </div>

    @auth
        <div class="relative top-10 w-fit z-10 text-lg">
            <a href="{{ url('e/home') }}" class="flex items-center text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 px-4 py-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="2" fill="currentColor" class="size-5 me-2">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
</div>