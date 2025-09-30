<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-50">
    <div class="space-y-10 w-full max-w-7xl px-6">
        
        <!-- Title -->
        <div class="flex flex-col items-center justify-center mb-10">
            <h2 class="text-4xl xl:text-5xl font-extrabold text-gray-800 text-center tracking-tight mb-4">
                FAQs
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <div class="w-full max-w-5xl mx-auto mt-16">
            <div id="faq-list" class="flex flex-col items-center gap-6">        
                @forelse($faqs as $i => $faq)
                    <div class="faq-item bg-white rounded-xl shadow-md transition-all overflow-hidden">
                        <button type="button" class="faq-toggle cursor-pointer flex w-full items-center justify-between px-6 py-4 text-left focus:outline-none group" data-faq="{{ $i }}">
                            <p class="text-lg mx-1 xl:text-xl font-semibold text-gray-800 flex items-center gap-3">
                                <span class="block min-w-11 p-2 text-center text-white bg-gradient-to-r from-red-600 to-red-400 rounded-full">{{ $i + 1 }}</span>
                                {{ $faq['q'] }}
                            </p>
                            <svg class="faq-arrow min-w-6 h-6 text-red-500 transform transition-transform duration-300"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 text-gray-700 text-base xl:text-lg transition-all duration-300 max-h-0 opacity-0 overflow-hidden">
                            <div class="pb-4 pt-2">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="faq-item bg-white rounded-xl shadow-md transition-all overflow-hidden">
                        <button type="button" class="faq-toggle cursor-pointer flex w-full items-center justify-between px-6 py-4 text-left focus:outline-none group" data-faq="{{ $i }}">
                            <span class="text-lg xl:text-xl font-semibold text-gray-800">What is Inspira?</span>
                            <svg class="faq-arrow w-6 h-6 text-red-500 transform transition-transform duration-300"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 text-gray-700 text-base xl:text-lg transition-all duration-300 max-h-0 opacity-0 overflow-hidden">
                            <div class="pb-4 pt-2">
                                JGU-WXUT INSPIRA 2025 is a premier academic platform organized by Jakarta Global University (JGU) that brings together emerging researchers, scholars, and innovators to showcase their ideas and insights in the fields of science, technology, business, and health.
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
        

    @auth
        <div class="mt-10 flex justify-center">
            <a href="{{ url('e/faqs')}}" class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md-md text-base xl:text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
</div>
