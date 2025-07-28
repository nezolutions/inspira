<div class="flex flex-col items-center justify-center w-full min-h-screen bg-transparent py-36">
    <div class="space-y-3 w-full max-w-7xl mx-6">
        <div class="flex flex-col items-center justify-center mb-6">
            <h2 class="text-3xl lg:text-4xl font-bold mb-2">Awards</h2>
            <div class="w-24 h-1 bg-red-600 rounded-full"></div>
        </div>
        <div class="flex flex-col pb-4">
            <h3 class="font-bold text-2xl text-gray-700 mb-4">Researchers and Lecturers</h3>
            <div class="grid grid-cols-1 lg:grid-cols-3 items-center gap-4 text-center">
                <div class="flex flex-col items-center justify-center w-full bg-red-600 p-4 rounded-lg shadow-lg h-80 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Best Research Project</h3>
                    <p class="text-lg text-gray-200">Awarded to the most outstanding research project in terms of scientific contribution, methodological rigor, and novelty of ideas.</p>
                </div>
                <div class="flex flex-col items-center justify-center w-full bg-gray-700 p-4 rounded-lg shadow-lg h-80 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Innovation for Society Award</h3>
                    <p class="text-lg text-gray-200">Given to the project that demonstrates the greatest impact on society or effectively addresses real-world challenges through innovative solutions.</p>
                </div>
                <div class="flex flex-col items-center justify-center w-full bg-red-600 p-4 rounded-lg shadow-lg h-80 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Judges' Choice Award</h3>
                    <p class="text-lg text-gray-200">A special recognition granted based on the collective evaluation and discretion of the panel of judges, considering originality, relevance, and presentation.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col pb-4">
            <h3 class="font-bold text-2xl text-gray-700 mb-4">College/University Student</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-4 text-center">
                <div class="flex flex-col items-center justify-center w-full bg-red-600 p-4 rounded-lg shadow-lg h-80 lg:h-56 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Best Student Project</h3>
                    <p class="text-lg text-gray-200">Presented to the student-led project that excels in innovation, relevance to current issues, and overall execution.</p>
                </div>
                <div class="flex flex-col items-center justify-center w-full bg-gray-700 p-4 rounded-lg shadow-lg h-80 lg:h-56 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Best Poster Design</h3>
                    <p class="text-lg text-gray-200">Awarded for the most visually compelling and well-structured poster that effectively communicates the project's objectives, methodology, and results.</p>
                </div>
                <div class="flex flex-col items-center justify-center w-full bg-red-600 p-4 rounded-lg shadow-lg h-80 lg:h-56 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Best Presentation</h3>
                    <p class="text-lg text-gray-200">Recognizes the participant who delivers the most clear, engaging, and professional oral presentation.</p>
                </div>
                <div class="flex flex-col items-center justify-center w-full bg-gray-700 p-4 rounded-lg shadow-lg h-80 lg:h-56 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Gold/Silver/Bronze Award</h3>
                    <p class="text-lg text-gray-200">Given to the top three student projects that demonstrate exceptional quality across all assessment criteria.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <h3 class="font-bold text-2xl text-gray-700 mb-4">High School Student</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-4 text-center">
                <div class="flex flex-col items-center justify-center w-full bg-red-600 p-4 rounded-lg shadow-lg h-80 lg:h-56 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Best Innovator Project</h3>
                    <p class="text-lg text-gray-200">Granted to the high school project that showcases outstanding creativity, problem-solving, and potential for further development.</p>
                </div>
                <div class="flex flex-col items-center justify-center w-full bg-gray-700 p-4 rounded-lg shadow-lg h-80 lg:h-56 space-y-5">
                    <h3 class="text-white text-4xl lg:text-5xl font-thin">Best Visual Poster</h3>
                    <p class="text-lg text-gray-200">Awarded for the most visually attractive and easy-to-understand poster among high school participants.</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @if (auth()->check())
    <div class="relative bottom-4 w-fit z-10 text-lg">
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