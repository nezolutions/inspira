<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-50">
    <div class="space-y-8 w-full max-w-7xl px-6">  
        
        <!-- Title -->
        <div class="z-20 flex flex-col items-center justify-center mb-10">
            <h2 class="text-3xl xl:text-5xl font-extrabold text-gray-800 text-center tracking-tight mb-4">
                Topics as Relevant
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <!-- Topics Grid -->
        @if ($topic)
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                @forelse ($topic->where('id', '<', 4) as $t)
                    <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl bg-white/90 hover:bg-white backdrop-blur-sm border border-gray-200 transition transform hover:-translate-y-1">
                        <!-- Card Header -->
                        <h3 class="text-xl xl:text-2xl font-bold text-white p-4 
                                   {{ $t->id % 2 === 0 ? 'bg-gradient-to-r from-red-600 to-red-500' : 'bg-gradient-to-r from-gray-800 to-gray-700' }}">
                            {{ $t->title }}
                        </h3>
                        <!-- Card Body -->
                        <div class="p-6 text-gray-700">
                            <ul class="space-y-2 text-gray-700 text-md xl:text-lg">
                                @foreach ($t->list as $item)
                                    <li class="flex items-start gap-2"><span class="text-red-400">✔</span> {!! $item !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @empty
                    <!-- Contoh Default Card -->
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white/90 backdrop-blur-sm border border-gray-200">
                        <h3 class="text-xl xl:text-2xl font-bold text-white bg-gradient-to-r from-red-600 to-red-500 p-4">
                            Lorem Ipsum
                        </h3>
                        <ul class="p-6 space-y-2 text-gray-700 text-md xl:text-lg">
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                        </ul>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white/90 backdrop-blur-sm border border-gray-200">
                        <h3 class="text-xl xl:text-2xl font-bold text-white bg-gradient-to-r from-gray-800 to-gray-700 p-4">
                            Lorem Ipsum
                        </h3>
                        <ul class="p-6 space-y-2 text-gray-700 text-md xl:text-lg">
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                        </ul>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white/90 backdrop-blur-sm border border-gray-200">
                        <h3 class="text-xl xl:text-2xl font-bold text-white bg-gradient-to-r from-red-600 to-red-500 p-4">
                            Lorem Ipsum
                        </h3>
                        <ul class="p-6 space-y-2 text-gray-700 text-md xl:text-lg">
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                        </ul>
                    </div>
                @endforelse
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                @forelse ($topic->where('id', '>', 3) as $t)
                    <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl bg-white/90 hover:bg-white backdrop-blur-sm border border-gray-200 transition transform hover:-translate-y-1">
                        <!-- Card Header -->
                        <h3 class="text-xl xl:text-2xl font-bold text-white p-4 
                                   {{ $t->id % 2 == 0 ? 'bg-gradient-to-r from-red-600 to-red-500' : 'bg-gradient-to-r from-gray-800 to-gray-700' }}">
                            {{ $t->title }}
                        </h3>
                        <!-- Card Body -->
                        <div class="p-6 text-gray-700">
                            <ul class="space-y-2 text-gray-700 text-md xl:text-lg">
                                @foreach ($t->list as $item)
                                    <li class="flex items-start gap-2"><span class="text-red-400    ">✔</span> {!! $item !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @empty
                    <!-- Contoh Default Card -->
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white/90 backdrop-blur-sm border border-gray-200">
                        <h3 class="text-xl xl:text-2xl font-bold text-white bg-gradient-to-r from-red-600 to-red-500 p-4">
                            Lorem Ipsum
                        </h3>
                        <ul class="p-6 space-y-2 text-gray-700 text-md xl:text-lg">
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                        </ul>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white/90 backdrop-blur-sm border border-gray-200">
                        <h3 class="text-xl xl:text-2xl font-bold text-white bg-gradient-to-r from-gray-800 to-gray-700 p-4">
                            Lorem Ipsum
                        </h3>
                        <ul class="p-6 space-y-2 text-gray-700 text-md xl:text-lg">
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                        </ul>
                    </div>
                @endforelse
            </div>

            {{-- <div class="grid grid-cols-1 gap-8">
                @forelse ($topic->where('id', '>', 5) as $t)
                    <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl bg-white/90 hover:bg-white backdrop-blur-sm border border-gray-200 transition transform hover:-translate-y-1">
                        <!-- Card Header -->
                        <h3 class="text-xl xl:text-2xl font-bold text-white p-4 
                                   {{ $t->id % 2 === 1 ? 'bg-gradient-to-r from-red-600 to-red-500' : 'bg-gradient-to-r from-gray-800 to-gray-700' }}">
                            {{ $t->title }}
                        </h3>
                        <!-- Card Body -->
                        <div class="p-6 text-gray-700">
                            <ul class="space-y-2 text-gray-700 text-md xl:text-lg">
                                @foreach ($t->list as $item)
                                    <li class="flex items-start gap-2"><span class="text-red-400">✔</span> {!! $item !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @empty
                    <!-- Contoh Default Card -->
                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white/90 backdrop-blur-sm border border-gray-200">
                        <h3 class="text-xl xl:text-2xl font-bold text-white bg-gradient-to-r from-gray-800 to-gray-700 p-4">
                            Lorem Ipsum
                        </h3>
                        <ul class="p-6 space-y-2 text-gray-700 text-md xl:text-lg">
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                            <li class="flex items-start gap-2"><span class="text-red-400">✔</span>Lorem Ipsum dolor sit amet </li>
                        </ul>
                    </div>
                @endforelse
            </div> --}}
        @endif
    </div>

    @auth
        <div class="mt-10 flex justify-center">
            <a href="{{ url('e/topics')}}" class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base xl:text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
</div>
