<div class="flex flex-col items-center justify-center w-full py-16 min-h-screen bg-gray-50">
    <div class="space-y-3 w-full max-w-7xl">
        <div class="flex flex-col items-center justify-center mb-6">
            <h2 class="text-3xl lg:text-4xl font-bold mb-2">Category</h2>
            <div class="w-24 h-1 bg-red-600 rounded-full"></div>
        </div>
        <div class="flex flex-col items-center mx-6">
            <div class="w-full mb-8 text-gray-700 text-xl mx-auto">
                <h3 class="font-bold text-xl lg:text-2xl mb-4">Participant Category</h3>
                <ul class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full">
                    @forelse ($parti as $p)
                        <li class="group transition-all duration-300 bg-white border-t-3 rounded-2xl shadow-lg flex flex-col items-center py-8 px-6 text-center {{ $p->id % 2 === 0 ? 'border-t-red-600' : 'border-t-gray-700' }}">
                            <div class="flex items-center justify-center w-14 h-14 rounded-full bg-red-50 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 {{ $p->id % 2 === 0 ? 'text-red-600' : 'text-gray-700' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-lg text-gray-900 mb-1">{{ $p->title }}</span>
                        </li>
                    @empty
                        <li class="group transition-all duration-300 bg-white border-t-3 border-t-red-600 rounded-2xl shadow-lg flex flex-col items-center py-8 px-6 text-center">
                            <div class="flex items-center justify-center w-14 h-14 rounded-full bg-red-50 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-red-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-lg text-gray-900 mb-1">Researcher & Lecturer</span>
                        </li>
                        <li class="group transition-all duration-300 bg-white border-t-3 border-t-gray-700 rounded-2xl shadow-lg flex flex-col items-center py-8 px-6 text-center">
                            <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gray-100 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-lg text-gray-900 mb-1">College/University Student</span>
                        </li>
                        <li class="group transition-all duration-300 bg-white border-t-3 border-t-red-600 rounded-2xl shadow-lg flex flex-col items-center py-8 px-6 text-center">
                            <div class="flex items-center justify-center w-14 h-14 rounded-full bg-red-50 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-red-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                            </div>
                            <span class="font-semibold text-lg text-gray-900 mb-1">High School Student</span>
                        </li>
                    @endforelse
                </ul>
            </div>
            <div class="w-full text-gray-700 text-xl mx-auto">
                <h3 class="font-bold text-xl lg:text-2xl mb-4">Competition Category</h3>
                <ul class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
                    @forelse ($compe as $c)
                        <li class="shadow-lg rounded-lg h-full lg:h-64 border-t-3 {{ $c->id % 2 === 0 ? 'border-t-gray-700' : 'border-t-red-600' }} p-4 bg-white space-y-2">
                            <h4 class="text-black font-semibold text-lg lg:text-xl flex flex-row items-center">
                                @if ($c->id % 2 === 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                @endif
                                {{ $c->title }}
                            </h4>
                            <p class="text-start text-sm lg:text-lg">{{ $c->content }}</p>
                        </li>    
                    @empty                        
                        <li class="shadow-lg rounded-lg h-full lg:h-64 border-t-3 border-t-gray-700 p-4 bg-white space-y-2">
                            <h4 class="text-black font-semibold text-lg lg:text-xl flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                                </svg>
                                Oral Presentation (Online via Zoom/Gmeet)
                            </h4>
                            <p class="text-start text-sm lg:text-lg">Participants will deliver a 10-minute research presentation followed by a 3-minute Q&A session with the judges. This category emphasizes clarity, scientific rigor, and effective communication. Presentations will be conducted online via Zoom/Gmeet.</p>
                        </li>
                        <li class="shadow-lg rounded-lg h-full lg:h-64 border-t-3 border-t-red-600 p-4 bg-white space-y-2">
                            <h4 class="text-black font-semibold text-lg lg:text-xl flex flex-row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                Poster Presentations (On-site)
                            </h4>
                            <p class="text-start text-sm lg:text-lg">Participants will present their research through a scientific poster in a face-to-face session with the judges. Each participant will have the opportunity to explain their work and engage in a brief Q&A session. This category emphasizes visual communication, content clarity, and the ability to discuss research findings concisely and confidently. Presentations will take place onsite at the event venue.</p>
                        </li>
                    @endforelse


                </ul>
            </div>
        </div>
    </div>
    @if (auth()->check())
        <div class="relative top-10 w-fit z-10 text-lg">
            <div class="flex items-center text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 px-4 py-2 transition group">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 me-2">
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
    @endif
</div>