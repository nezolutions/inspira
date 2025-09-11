<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-100">
    <div class="space-y-10 w-full max-w-7xl px-6">
        
        <!-- Title -->
        <div class="flex flex-col items-center justify-center mb-10">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-800 text-center tracking-tight mb-4">
                Agenda
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
        </div>

        <!-- Description -->
        <div class="flex flex-col items-center">
            <p class="text-gray-600 text-base lg:text-lg max-w-5xl leading-relaxed text-center">
                {!! $agendaTitle->description ?? 'The highlight agenda is the <b>Strategic Forum titled "Strengthening the Triple Helix for Sustainable Growth and Innovation"</b>, which brings together thought leaders from academia, industry, and government. This forum aims to reinforce collaboration among key stakeholders in building a sustainable innovation ecosystem. Through panel discussions, interactive sessions, and the exchange of best practices, the forum will explore strategic pathways to drive knowledge- and technology-based economic development.' !!}
            </p>

            <!-- Agenda Table -->
            <div class="w-full max-w-5xl mt-10">
                <p class="text-gray-800 font-semibold text-base lg:text-xl flex items-center gap-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                    </svg>                                        
                    Oral Presentation & Poster Competition
                </p>
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
                            <tr class="{{ $agendas->id % 2 == 1 ? 'bg-red-50' : 'bg-white' }} hover:bg-red-100 transition">
                                <td class="{{ $agendas->id == 1 ? 'hidden' : 'py-4 px-6' }} text-sm lg:text-lg font-medium">
                                    {!! $agendas->agenda !!}
                                </td>
                                <td class="{{ $agendas->id == 1 ? 'hidden' : 'py-4 px-6' }} text-sm lg:text-lg">
                                    {!! $agendas->timeline !!}
                                </td>   
                            </tr>
                            @empty    
                                <tr class="bg-red-white hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Submission & Payment</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">Now - October 10<sup>th</sup> 2025</td>
                                </tr>
                                <tr class="bg-red-50 hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">PowerPoint File and Poster Upload Dateline</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">October 10<sup>th</sup> 2025</td>
                                </tr>
                                <tr class="bg-red-white hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Oral Presentation Competition (Online)</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">October 10-15<sup>th</sup> 2025</td>
                                </tr>   
                                <tr class="bg-red-50 hover:bg-red-100 transition">
                                    <td class="py-4 px-6 text-sm lg:text-lg font-medium">Presentation (Offline)</td>
                                    <td class="py-4 px-6 text-sm lg:text-lg">October 21<sup>st</sup> 2025</td>
                                </tr>
                                <tr class="bg-red-white hover:bg-red-100 transition">
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
