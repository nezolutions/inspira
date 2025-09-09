<div class="flex items-center justify-center w-full h-72 lg:h-32 bg-gray-700">
    <div class="w-full max-w-7xl px-6 flex flex-col lg:flex-row items-center justify-between">
        <div class="flex flex-col lg:flex-row items-center gap-4">
            <p class="text-4xl lg:text-5xl text-white font-bold">Interested?</p>
            <div class="flex items-center justify-center lg:justify-start">
                <a href="{{ $app->register ?? '#' }}" class="group inline-flex items-center gap-2 px-6 py-3 rounded-full text-lg font-bold uppercase tracking-wide text-white bg-gradient-to-r from-red-600 to-red-500 hover:from-red-700 hover:to-red-600 shadow-lg shadow-red-800/40 transition-transform duration-300 hover:scale-105">
                    Register Here
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0-7.5 7.5M21 12H3" />
                    </svg> --}}
                </a>
            </div>
        </div>
        <div class=" hidden lg:flex items-center">
            <a href="#home" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                </svg>
              </a>
        </div>
    </div>
</div>