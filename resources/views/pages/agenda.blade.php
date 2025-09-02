<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gradient-to-b from-gray-50 via-white to-gray-100">
    <div class="space-y-10 w-full max-w-7xl px-6">
        
        <!-- Title -->
        <div class="flex flex-col items-center justify-center">
            <h2 class="text-4xl lg:text-5xl text-center font-extrabold text-gray-800 mb-4">
                Agenda
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <!-- Description -->
        <div class="flex flex-col items-center">
            <p class="text-gray-600 text-base lg:text-lg max-w-4xl leading-relaxed text-center">
                {!! $agendaTitle->description ?? 
                    'The highlight agenda is the Strategic Forum titled "Strengthening the Triple Helix for Sustainable Growth and Innovation", which brings together thought leaders from academia, industry, and government. This forum aims to reinforce collaboration among key stakeholders in building a sustainable innovation ecosystem. Through panel discussions, interactive sessions, and the exchange of best practices, the forum will explore strategic pathways to drive knowledge- and technology-based economic development.<br/><b>Venue: Jakarta Global University Ballroom. Wednesday, October, 20-22 2025.</b>' !!}
            </p>

            <!-- Agenda Table -->
            <div class="w-full max-w-4xl mt-10">
                <div class="overflow-x-auto rounded-xl shadow-lg">
                    <table class="min-w-full bg-white/80 backdrop-blur-sm text-gray-700 border border-gray-100">
                        <thead>
                            <tr class="bg-gradient-to-r from-red-600 to-red-500 text-white">
                                <th class="py-4 px-6 text-left text-lg lg:text-xl font-semibold">Agenda</th>
                                <th class="py-4 px-6 text-left text-lg lg:text-xl font-semibold">Timeline</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($agendaTable as $agendas)
                                <tr class="hover:bg-red-50 transition">
                                    <td class="{{ $agendas->id == 1 ? 'hidden' : 'py-4 px-6' }} text-sm lg:text-lg font-medium">
                                        {{ $agendas->agenda }}
                                    </td>
                                    <td class="{{ $agendas->id == 1 ? 'hidden' : 'py-4 px-6' }} text-sm lg:text-lg">
                                        @php    
                                            $today = \Carbon\Carbon::now()->format('F jS Y');
                                            $startDate = \Carbon\Carbon::parse($agendas->prefix_date)->format('F jS Y');
                                            $endDate = $agendas->suffix_date ? \Carbon\Carbon::parse($agendas->suffix_date)->format('F jS Y') : null;
                                        @endphp
                                        {{ $startDate == $today || $startDate == null ? 'Now' : $startDate }}
                                        {{ $endDate == null ? '' : '-' }}
                                        {{ $endDate == null ? '' : $endDate }}
                                    </td>
                                </tr>
                            @empty    
                                <tr class="hover:bg-red-50 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Submission & Payment</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">Now - October 10<sup>th</sup> 2025</td>
                                </tr>
                                <tr class="hover:bg-red-50 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Poster Upload Dateline</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">October 10<sup>th</sup> 2025</td>
                                </tr>
                                <tr class="hover:bg-red-50 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Presentation (Online)</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">October 10-15<sup>th</sup> 2025</td>
                                </tr>   
                                <tr class="hover:bg-red-50 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Presentation (Offline)</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">October 21<sup>st</sup> 2025</td>
                                </tr>
                                <tr class="hover:bg-red-50 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Announcement & Awards</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">October 22<sup>nd</sup> 2025</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @auth
        <div class="mt-10 flex justify-center">
            <a href="{{ url('e/agenda')}}" class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endauth
</div>
