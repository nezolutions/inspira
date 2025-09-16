<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-100">
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
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600">
                    <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                </svg>
                <h3 class="font-bold text-2xl lg:text-3xl text-gray-600 text-start">Participant Category</h3>
            </div>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($parti as $p)
                    <li class="group bg-white/90 backdrop-blur-sm border border-gray-200 rounded-2xl shadow-lg flex flex-col items-center text-center overflow-hidden h-52 transition-transform duration-300 hover:scale-105">
                        <div class="relative w-full h-full bg-gray-600 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $p->background }}')">
                            <!-- Overlay gelap -->
                            <div class="absolute inset-0 bg-gray-900/70"></div>
                            
                            <div class="relative flex flex-col items-center justify-center px-4 h-full">
                                <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-lg ring-2 ring-white/70">
                                    <!-- Tempat ikon -->
                                    <img src="{{ $p->icon }}" alt="icon" class="w-10">
                                </div>
                                <h2 class="mt-3 text-xl lg:text-2xl font-bold text-white drop-shadow">{{ $p->title }}</h2>
                            </div>
                        </div>
                    </li>
                @empty
                    <li class="group bg-white/90 backdrop-blur-sm border border-gray-200 rounded-2xl shadow-lg flex flex-col items-center text-center overflow-hidden h-52 transition-transform duration-300 hover:scale-105">
                        <div class="relative w-full h-full bg-gray-600 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/jgu.png')}}')">
                            <!-- Overlay gelap -->
                            <div class="absolute inset-0 bg-gray-900/70"></div>
                                    
                            <div class="relative flex flex-col items-center justify-center h-full">
                                <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-lg ring-2 ring-white/70">
                                    <!-- Tempat ikon -->
                                    <img src="{{ asset('images/icon.png') }}" alt="icon" class="w-10">
                                </div>
                                <h2 class="mt-3 text-2xl font-bold text-white drop-shadow">Lorem Ipsum</h2>
                            </div>
                        </div>
                    </li>
                    <li class="group bg-white/90 backdrop-blur-sm border border-gray-200 rounded-2xl shadow-lg flex flex-col items-center text-center overflow-hidden h-52 transition-transform duration-300 hover:scale-105">
                        <div class="relative w-full h-full bg-gray-600 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/jgu.png')}}')">
                            <!-- Overlay gelap -->
                            <div class="absolute inset-0 bg-gray-900/70"></div>

                            <div class="relative flex flex-col items-center justify-center h-full">
                                <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-lg ring-2 ring-white/70">
                                    <!-- Tempat ikon -->
                                    <img src="{{ asset('images/icon.png') }}" alt="icon" class="w-10">
                                </div>
                                <h2 class="mt-3 text-2xl font-bold text-white drop-shadow">Lorem Ipsum</h2>
                            </div>
                        </div>
                    </li>
                    <li class="group bg-white/90 backdrop-blur-sm border border-gray-200 rounded-2xl shadow-lg flex flex-col items-center text-center overflow-hidden h-52 transition-transform duration-300 hover:scale-105">
                        <div class="relative w-full h-full bg-gray-600 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/jgu.png')}}')">
                            <!-- Overlay gelap -->
                            <div class="absolute inset-0 bg-gray-900/70"></div>

                            <div class="relative flex flex-col items-center justify-center h-full">
                                <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-lg ring-2 ring-white/70">
                                    <!-- Tempat ikon -->
                                    <img src="{{ asset('images/icon.png') }}" alt="icon" class="w-10">
                                </div>
                                <h2 class="mt-3 text-2xl font-bold text-white drop-shadow">Lorem Ipsum</h2>
                            </div>
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>

        <!-- Competition Category -->
        <div class="space-y-6">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600">
                    <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                </svg>
                <h3 class="font-bold text-2xl lg:text-3xl text-gray-600 text-start">Competition Category</h3>
            </div>
            <ul class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @forelse ($compe as $c)
                    <li class="rounded-2xl shadow-lg bg-white/80 backdrop-blur-sm border-t-8 {{ $c->id % 2 == 1 ? 'border-red-600' : 'border-gray-600' }} p-6 space-y-4 transition-transform duration-300 hover:scale-105">
                        <h4 class="font-semibold text-lg lg:text-xl flex items-center gap-2">
                            @if ($c->id % 2 == 1)
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
                        <p class="text-gray-700">{{ $c->content }}</p>
                        @if ($c->id == 1)
                        <a class="text-red-800 transition underline hover:text-black" href="{{ route('oral') }}">View presentation format</a>
                        @endif  
                    </li>
                @empty
                    <!-- contoh default -->
                    <li class="rounded-2xl shadow-lg bg-white/80 backdrop-blur-sm border-t-8 border-red-600 p-6 space-y-4">
                        <h4 class="font-semibold text-lg lg:text-xl flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                            </svg>
                            Oral Presentation (Online)
                        </h4>
                        <p class="text-gray-700">Participants will deliver a 10-minute research presentation followed by a 3-minute Q&A session with the judges. This category emphasizes clarity, scientific rigor, and effective communication. Presentations will be conducted online via Zoom/Gmeet.</p>
                        <a class="text-red-800 transition underline hover:text-black" href="{{ route('oral') }}">View presentation format</a>
                    </li>
                    <li class="rounded-2xl shadow-lg bg-white/80 backdrop-blur-sm border-t-8 border-gray-600 p-6 space-y-4">
                        <h4 class="font-semibold text-lg lg:text-xl flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            Poster Presentations (On-site)
                        </h4>
                        <p class="text-gray-700">Participants will present their research through a scientific poster in a face-to-face session with the judges. Each participant will have the opportunity to explain their work and engage in a brief Q&A session. This category emphasizes visual communication, content clarity, and the ability to discuss research findings concisely and confidently. Presentations will take place onsite at the event venue.</p>
                    </li>
                @endforelse
            </ul>
        </div>

    </div>

    @auth
        <div class="mt-10 flex justify-center">
            <div class="flex items-center gap-2 select-none text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg group">
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
