<div class="w-full max-w-7xl mx-auto px-4 pt-6 pb-16 md:py-4">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
        <div class="flex flex-col items-center gap-4 text-center lg:flex-row lg:text-start">
            <img src="{{ asset('images/inspira-white.png') }}" class="hidden lg:block w-30" draggable="false" />
            <div class="flex-1 flex flex-col items-center lg:items-start">
                <p class="block text-sm text-gray-400">
                    &copy; {{ now()->format('Y') }} <a href="#home" class="text-white hover:underline">{{ $app ? $app->app_name[0] .' '. $app->app_name[1] : 'Jakarta Global University'}}</a>.
                    <span class="block lg:inline">All Rights Reserved.</span>
                </p>
                <p class="text-sm text-gray-400">Developed by <span class="text-red-600">ITIC@JGU</span></p>
            </div>
        </div>
        <ul class="flex justify-center lg:justify-end items-center mt-6 lg:mt-0 mb-6 text-sm font-medium sm:mb-0">
            <li>
                <a href="{{ $app->register ?? '#' }}" class="hover:underline me-4 text-red-600 md:me-6">Register Now</a>
            </li>
            <li>
                <a href="#home" class="hover:underline me-4 text-gray-400 md:me-6">Back to Top</a>
            </li>
        </ul>
    </div>
</div>
