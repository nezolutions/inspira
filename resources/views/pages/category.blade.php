<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gradient-to-b from-gray-50 via-white to-gray-100">
    <div class="w-full max-w-7xl space-y-12 px-6">

        <!-- Section Title -->
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-4xl lg:text-5xl text-center font-extrabold text-gray-800 mb-4">
                Category
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <!-- Participant Category -->
        <div class="space-y-6">
            <h3 class="font-bold text-2xl lg:text-3xl text-gray-800 text-center">Participant Category</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($parti as $p)
                    <li class="group transition-all duration-300 bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 flex flex-col items-center py-10 px-6 text-center">
                        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r {{ $p->id % 2 === 0 ? 'from-red-600 to-red-400' : 'from-gray-700 to-gray-500' }} text-white mb-4 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-lg text-gray-900">{{ $p->title }}</span>
                    </li>
                @empty
                    <!-- contoh default -->
                    <li class="group bg-white/80 backdrop-blur-sm border border-gray-100 rounded-2xl shadow-md flex flex-col items-center py-10 px-6 text-center">
                        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r from-red-600 to-red-400 text-white mb-4 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-lg text-gray-900">Researcher & Lecturer</span>
                    </li>
                @endforelse
            </ul>
        </div>

        <!-- Competition Category -->
        <div class="space-y-6">
            <h3 class="font-bold text-2xl lg:text-3xl text-gray-800 text-center">Competition Category</h3>
            <ul class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @forelse ($compe as $c)
                    <li class="rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition bg-white/80 backdrop-blur-sm border border-gray-100 p-6 space-y-4">
                        <h4 class="text-black font-semibold text-lg lg:text-xl flex items-center gap-2">
                            @if ($c->id % 2 === 1)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            @endif
                            {{ $c->title }}
                        </h4>
                        <p class="text-gray-700 text-base lg:text-lg leading-relaxed">{{ $c->content }}</p>
                    </li>
                @empty
                    <!-- contoh default -->
                    <li class="rounded-2xl shadow-md bg-white/80 backdrop-blur-sm border border-gray-100 p-6 space-y-4">
                        <h4 class="font-semibold text-lg lg:text-xl flex items-center gap-2">
                            Oral Presentation (Online)
                        </h4>
                        <p class="text-gray-700">Participants will deliver a 10-minute research presentation followed by a 3-minute Q&A session with the judges.</p>
                    </li>
                @endforelse
            </ul>
        </div>

    </div>

    @auth
        <div class="mt-10 flex justify-center">
            <div class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg group">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
                <span class="hidden group-hover:inline">:</span>
                <a href="{{ url('e/participant') }}" class="hidden group-hover:inline hover:text-red-600 transition">&nbsp;Participant&nbsp;</a>
                <span class="hidden group-hover:inline">/</span>
                <a href="{{ url('e/competition') }}" class="hidden group-hover:inline hover:text-red-600 transition">&nbsp;Competition</a>
            </div>
        </div>
    @endauth
</div>
