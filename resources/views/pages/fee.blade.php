<div class="flex flex-col items-center justify-center w-full min-h-screen py-16 bg-gray-100">
    <div class="space-y-6 w-full max-w-7xl">
        
        <!-- Title -->
        <div class="flex flex-col items-center justify-center mb-10">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-800 text-center tracking-tight mb-4">
                Entry Fee
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <!-- Table Container -->
        <div class="flex flex-col items-center px-6">
            <div class="w-full max-w-6xl">
                <div class="overflow-x-auto rounded-xl shadow-lg">
                    <table class="min-w-full bg-white text-gray-700 border-collapse">
                        <thead>
                            <tr class="bg-gradient-to-r from-red-600 to-red-500 text-white">
                                <th class="py-4 px-6 text-left text-lg lg:text-xl font-semibold">Participant</th>
                                <th class="py-4 px-6 text-left text-lg lg:text-xl font-semibold">Oral Presentation (Online)</th>
                                <th class="py-4 px-6 text-left text-lg lg:text-xl font-semibold">Poster Presentation (Offline)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($fee as $fees)
                                <tr class="{{ $fees->id % 2 === 0 ? 'bg-red-50' : 'bg-white' }} hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-md lg:text-lg font-semibold">{{ $fees->title }}</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">{{ number_format($fees->online_fee, 0, ',', '.') }} {{ $fees->on_fee_type }}</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">{{ number_format($fees->offline_fee, 0, ',', '.') }} {{ $fees->on_fee_type }}</td>
                                </tr>
                            @empty    
                                <tr class="bg-white hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-md lg:text-lg font-semibold">International Participant</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">50 USD</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">50 USD</td>
                                </tr>
                                <tr class="bg-red-50 hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-md lg:text-lg font-semibold">Researcher & Lecturer</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">400,000 IDR</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">300,000 IDR</td>
                                </tr>
                                <tr class="bg-white hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-md lg:text-lg font-semibold">College/University Student</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">300,000 IDR</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">200,000 IDR</td>
                                </tr>
                                <tr class="bg-red-50 hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-md lg:text-lg font-semibold">High School Student</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">150,000 IDR</td>
                                    <td class="py-4 px-6 text-md lg:text-lg">100,000 IDR</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @auth
        <div class="mt-10 flex justify-center">
            <a href="{{ url('e/fee')}}" class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
    </div>
</div>
