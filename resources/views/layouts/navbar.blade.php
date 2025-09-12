
<div class="fixed xl:hidden bottom-0 left-0 z-50 w-full h-16 bg-gray-700 border-t-2 border-gray-600 select-none">
    <div class="grid grid-cols-3 h-full max-w-lg mx-auto font-medium">
        <a href="#home" class="inline-flex flex-col w-full items-center justify-center px-5 hover:bg-gray-800 group transition">
            <svg class="transition w-5 h-5 mb-2 text-gray-400 group-hover:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            <span class="transition text-sm text-gray-400 group-hover:text-red-500">Home</span>
        </a>
        <a href="{{ $app->register ?? '#' }}" class="inline-flex flex-col w-full items-center justify-center px-5 hover:bg-gray-800 group transition">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition mb-2 text-red-500 group-hover:text-gray-400">
                <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z" clip-rule="evenodd" />
                <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
            </svg>
              
            <span class="transition text-sm text-red-500 group-hover:text-gray-400">Registration</span>
        </a>
        <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal" class="cursor-pointer inline-flex flex-col w-full items-center justify-center px-5 hover:bg-gray-800 group transition">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="transition w-5 h-5 mb-2 text-gray-400 group-hover:text-red-500">
                <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />
            </svg>              
            <span class="transition text-sm text-gray-400 group-hover:text-red-500">Menu</span>
        </button>
    </div>
</div>
