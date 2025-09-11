<div class="w-full max-w-7xl mx-auto px-4 pt-6 pb-24 md:py-4">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
        <div class="flex flex-col items-center gap-4 text-center lg:flex-row justify-between w-full">
            <div class="hidden lg:flex items-center gap-2">
                <img src="{{ asset('images/inspira-white.png') }}" class="w-20" draggable="false" />
                <a class="text-sm text-red-600 hover:text-gray-200 font-medium transition hover:bg-gradient-to-r hover:from-red-800 hover:to-red-700 px-3 py-1.5 rounded-md" href="{{ $app->register ?? '#' }}">Register Now</a>
            </div>
            <div class="flex items-center lg:items-end gap-1">
                <p class="block text-sm text-gray-400">
                    &copy; {{ now()->format('Y') }} <a href="https://www.jgu.ac.id" class="text-white hover:underline">Jakarta Global University</a>. All Rights Reserved
                    <span class="text-gray-400 hidden lg:inline">|</span>
                    <span class="block lg:inline text-sm text-gray-400">Developed by <a href="itic.jgu.ac.id" class="text-red-600 hover:underline">ITIC@JGU</a></span>
                </p>
            </div>
        </div>
    </div>
</div>
