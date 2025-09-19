
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full select-none">
    <div class="fixed inset-0 bg-black/50 transition"></div>

    <div class="relative p-6 w-full max-w-sm max-h-full">
        <div class="relative bg-white rounded-md shadow-sm dark:bg-gray-700 p-4 text-center">
            <button type="button" data-modal-hide="default-modal" aria-label="Tutup" class="absolute top-2 right-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex items-center justify-center transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <ul class="flex-1 items-center">
                <a href="@if (!Route::is('main')) {{ route('main') }}#home @else #home @endif"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-red-500 font-semibold transition">Home</li></a>
                <a href="@if (!Route::is('main')) {{ route('main') }}#about @else #about @endif"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-red-500 font-semibold transition">About</li></a>
                <a href="@if (!Route::is('main')) {{ route('main') }}#agenda @else #agenda @endif"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-red-500 font-semibold transition">Agenda</li></a>
                <a href="@if (!Route::is('main')) {{ route('main') }}#topics @else #topics @endif"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-red-500 font-semibold transition">Topics</li></a>
                <a href="@if (!Route::is('main')) {{ route('main') }}#category @else #category @endif"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-red-500 font-semibold transition">Category</li></a>
                <a href="@if (!Route::is('main')) {{ route('main') }}#awards @else #awards @endif"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-red-500 font-semibold transition">Awards</li></a>
                <a href="@if (!Route::is('main')) {{ route('main') }}#fee @else #fee @endif"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-red-500 font-semibold transition">Fee</li></a>
            </ul>
        </div>
    </div>
</div>

  