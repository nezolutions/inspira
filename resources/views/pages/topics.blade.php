<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gradient-to-b from-gray-50 via-white to-gray-100">
    <div class="w-full max-w-7xl space-y-12 px-6">
        
        <!-- Title -->
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-4xl lg:text-5xl text-center font-extrabold text-gray-800 mb-4">
                Topics as Relevant
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <!-- Topics Grid -->
        @if ($topic)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($topic as $t)
                    <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl bg-white/80 backdrop-blur-sm border border-gray-100 transition transform hover:-translate-y-1">
                        <!-- Card Header -->
                        <h3 class="text-xl lg:text-2xl font-bold text-white p-4 
                                   {{ $t->id % 2 === 0 ? 'bg-gradient-to-r from-red-600 to-red-500' : 'bg-gradient-to-r from-gray-800 to-gray-700' }}">
                            {{ $t->title }}
                        </h3>
                        <!-- Card Body -->
                        <div class="p-6 text-gray-700">
                            {!! $t->list !!}
                        </div>
                    </div>
                @empty
                    <!-- Contoh Default Card -->
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white/80 backdrop-blur-sm border border-gray-100">
                        <h3 class="text-xl lg:text-2xl font-bold text-white bg-gradient-to-r from-red-600 to-red-500 p-4">
                            Informatic Engineering
                        </h3>
                        <ul class="p-6 space-y-2 text-gray-700 text-md lg:text-lg">
                            <li class="flex items-start gap-2"><span class="text-green-500">✔</span> Mobile Applications</li>
                            <li class="flex items-start gap-2"><span class="text-green-500">✔</span> Biomedical Informatics</li>
                            <li class="flex items-start gap-2"><span class="text-green-500">✔</span> Systems, Database & Data Mining</li>
                            <li class="flex items-start gap-2"><span class="text-green-500">✔</span> Artificial Intelligence</li>
                            <li class="flex items-start gap-2"><span class="text-green-500">✔</span> Computer Network</li>
                        </ul>
                    </div>
                @endforelse
            </div>
        @endif

    </div>

    @auth
        <div class="mt-10 flex justify-center">
            <a href="{{ url('e/topics')}}" class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
</div>
