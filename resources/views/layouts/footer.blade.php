<div class="w-full max-w-7xl mx-auto px-4 pt-6 pb-24 md:py-4 select-none">
    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
        <div class="flex flex-col items-center gap-4 text-center xl:flex-row justify-between w-full">
            <div class="hidden xl:flex items-center gap-2">
                <a href="{{ route('main') }}">
                    <img src="{{ asset('images/inspira-white.png') }}" class="w-20" draggable="false" />
                </a>
            </div>
            <div class="flex items-center xl:items-end gap-1">
                <p class="block text-sm text-gray-400">
                    &copy; {{ now()->format('Y') }} <a target="_blank" href="http://www.jgu.ac.id" class="text-white hover:underline">Jakarta Global University</a>. All Rights Reserved
                    <span class="text-gray-400 hidden xl:inline">|</span>
                    <span class="block xl:inline text-sm text-gray-400">Developed by <a target="_blank" href="http://itic.jgu.ac.id" class="text-red-600 hover:underline">ITIC JGU</a></span>
                </p>
            </div>
        </div>
    </div>
</div>
