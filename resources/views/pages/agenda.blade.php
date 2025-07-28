<div class="flex flex-col items-center justify-center w-full py-16 lg:py-0 min-h-screen bg-gray-50">
    <div class="space-y-3 w-full max-w-7xl">
        <div class="flex flex-col items-center justify-center mb-6">
            <h2 class="text-3xl lg:text-4xl font-bold mb-2">Agenda</h2>
            <div class="w-24 h-1 bg-red-600 rounded-full"></div>
        </div>
        <div class="flex flex-col items-center mx-6">
            <p class="text-gray-700 leading-6 lg:leading-7 text-md lg:text-xl max-w-5xl mx-auto text-justify lg:text-center">
                The International Competition on Research Posters and Oral Presentations, open to students, early-career researchers, lecturer, and young professionals to present their research findings, innovative ideas, or ongoing development projects in a visual, data-driven format. More than just a competition, this activity provides a platform for constructive academic dialogue, with evaluations by a panel of interdisciplinary experts.
            </p>
            <div class="w-full max-w-3xl mt-8">
                <div class="overflow-x-auto rounded-lg shadow-lg">
                    <table class="min-w-full bg-white text-gray-700">
                        <thead>
                            <tr class="bg-red-600 text-white">
                                <th class="py-3 px-6 text-left text-xl lg:text-2xl font-semibold">Agenda</th>
                                <th class="py-3 px-6 text-left text-xl lg:text-2xl font-semibold">Timeline</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="py-4 px-6 text-md lg:text-lg">Submission & Payment</td>
                                <td class="py-4 px-6 text-md lg:text-lg">Now - October 10<sup>th</sup> 2025</td>
                            </tr>
                            <tr class="bg-red-50">
                                <td class="py-4 px-6 text-md lg:text-lg">Poster Upload Dateline</td>
                                <td class="py-4 px-6 text-md lg:text-lg">October 10<sup>th</sup> 2025</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="py-4 px-6 text-md lg:text-lg">Presentation (Online)</td>
                                <td class="py-4 px-6 text-md lg:text-lg">October 10-15<sup>th</sup> 2025</td>
                            </tr>
                            <tr class="bg-red-50">
                                <td class="py-4 px-6 text-md lg:text-lg">Presentation (Offline)</td>
                                <td class="py-4 px-6 text-md lg:text-lg">October 21<sup>st</sup> 2025</td>
                            </tr>
                            <tr class="bg-white">
                                <td class="py-4 px-6 text-md lg:text-lg">Announcement & Awards</td>
                                <td class="py-4 px-6 text-md lg:text-lg">October 22<sup>nd</sup> 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if (auth()->check())
        <div class="relative top-10 w-fit z-10 text-lg">
            <a href="#" class="flex items-center text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 px-4 py-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 me-2">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endif
</div>