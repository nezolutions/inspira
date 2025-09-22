@php
    if (isset($app)) {
        $title1 = $app->app_name[0] .' ';
        $title2 = $app->app_name[1];
        $icon = $app->app_icon;
        $isName1 = $app->is_fname_showed;
        $isName2 = $app->is_lname_showed;
        $isImage = $app->is_image_fit;
    } else {    
        $title1 = 'JGU-WXUT' . ' ';
        $title2 = 'INSPIRA '. now()->format('Y');
        $icon = 'images/icon.png';
        $isName1 = false;
        $isName2 = true;
        $isImage = false;
    }
@endphp

<nav class="flex w-full relative xl:fixed top-0 z-40 justify-center shadow-md select-none bg-white/90">
    <div class="w-full max-w-7xl flex flex-row justify-between items-center py-2 px-6">
    
    <a href="{{ route('main') }}" class="w-full flex justify-center xl:justify-start">
        <x-logo :isimage="$isImage" :isfname="$isName1" :islname="$isName2" :fname="$title1" :lname="$title2" :icon="$icon"></x-logo>
    </a>

    <ul class="flex flex-row gap-4.5 items-center">
        <!-- Home -->
        <li class="hidden xl:inline py-2">
            <a class="text-base text-gray-600 hover:text-black font-medium transition" 
                href="@if (!Route::is('main')) {{ route('main') }}#home @else #home @endif">Home
            </a>
        </li>
        <!-- About -->
        <li class="hidden xl:inline py-2">
            <a class="text-base text-gray-600 hover:text-black font-medium transition" 
                href="@if (!Route::is('main')) {{ route('main') }}#about @else #about @endif">About
            </a>
        </li>
        <!-- Dropdown: Conference -->
        <li class="hidden xl:inline relative group py-2">
            <button class="text-base text-gray-600 hover:text-black font-medium transition flex items-center gap-1">
                Conference
                <svg class="w-4 h-4 mt-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <!-- Dropdown items -->
            <ul class="absolute left-0 mt-2 hidden group-hover:block bg-white shadow-md rounded-md w-40">
                <li><a class="block px-4 py-2 rounded-md text-gray-600 hover:bg-gray-100" href="@if (!Route::is('main')) {{ route('main') }}#agenda @else #agenda @endif">Agenda</a></li>
                <li><a class="block px-4 py-2 rounded-md text-gray-600 hover:bg-gray-100" href="@if (!Route::is('main')) {{ route('main') }}#topics @else #topics @endif">Topics</a></li>
                <li><a class="block px-4 py-2 rounded-md text-gray-600 hover:bg-gray-100" href="@if (!Route::is('main')) {{ route('main') }}#category @else #category @endif">Category</a></li>
            </ul>
        </li>
        <!-- Awards -->
        <li class="hidden xl:inline py-2">
            <a class="text-base text-gray-600 hover:text-black font-medium transition" 
                href="@if (!Route::is('main')) {{ route('main') }}#awards @else #awards @endif">Awards
            </a>
        </li>
        <!-- FAQs -->
        <li class="hidden xl:inline py-2">
            <a class="text-base text-gray-600 hover:text-black font-medium transition" 
                href="@if (!Route::is('main')) {{ route('main') }}#faqs @else #faqs @endif">FAQs
            </a>
        <!-- Fee -->
        <li class="hidden xl:inline py-2">
            <a class="text-base text-gray-600 hover:text-black font-medium transition" 
                href="@if (!Route::is('main')) {{ route('main') }}#fee @else #fee @endif">Fee
            </a>
        </li>
        <!-- Registration button -->
        <li class="hidden xl:inline">
            <a class="text-base text-white hover:text-gray-200 font-medium transition bg-gradient-to-r from-red-600 to-red-500 hover:from-red-700 hover:to-red-600 px-4 py-2 rounded-md" 
                href="{{ $app->register ?? '#' }}">
                Registration
            </a>
        </li>   
        <!-- Auth user menu -->
        @auth
            <li class="inline">
            <a href="{{ url('e/app') }}" class="text-base text-gray-600 hover:text-black font-medium transition flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                <span class="hidden xl:inline">Edit</span>
            </a>
            </li>
        @endauth
    </ul>
    </div>
</nav>
  