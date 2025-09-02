<div class="flex flex-col items-center justify-center w-full py-16 min-h-screen bg-transparent">
    <div class="space-y-3 w-full max-w-7xl">
        <div class="flex flex-col items-center justify-center mb-6">
            <h2 class="text-3xl lg:text-4xl font-bold mb-2">Topics as Relevant</h2>
            <div class="w-24 h-1 bg-red-600 rounded-full"></div>
        </div>
        @if ($topic)
            <div class="flex flex-col lg:grid mx-6 grid-cols-3 items-center gap-6 pb-2 text-gray-700">
                @forelse ($topic as $t)
                    <div class="shadow-lg rounded-lg w-full h-full">
                        <h3 class="text-xl lg:text-2xl text-white font-bold {{ $t->id % 2 === 0 ? 'bg-red-600' : 'bg-gray-700' }} rounded-t-lg p-4">{{ $t->title }}</h3>
                         {!! $t->list !!}
                    </div>
                @empty
                    <div class="shadow-lg rounded-lg w-full h-96">
                        <h3 class="text-xl lg:text-2xl text-white font-bold bg-red-600 rounded-t-lg p-4">Informatic Engineering</h3>
                        <ul class="text-md lg:text-lg p-4">
                            <li class="list-disc list-inside">Mobile Applications</li>
                            <li class="list-disc list-inside">Biomedical Informatics</li>
                            <li class="list-disc list-inside">Systems, Database & Data Mining</li>
                            <li class="list-disc list-inside">Artificial Intelligence</li>
                            <li class="list-disc list-inside">Computer Network</li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-lg w-full h-96">
                        <h3 class="text-xl lg:text-2xl text-white font-bold bg-gray-700 rounded-t-lg p-4">Industrial Engineering</h3>
                        <ul class="text-md lg:text-lg p-4">
                            <li class="list-disc list-inside">Smart & Lean Manufacturing System</li>
                            <li class="list-disc list-inside">Product Design & Development</li>
                            <li class="list-disc list-inside">Systems, Database & Data Mining</li>
                            <li class="list-disc list-inside">Digitalization Supply Chain</li>
                            <li class="list-disc list-inside">Green Manufacturing</li>
                            <li class="list-disc list-inside">Quality Management System</li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-lg w-full h-96">
                        <h3 class="text-xl lg:text-2xl text-white font-bold bg-red-600 rounded-t-lg p-4">Civil Engineering</h3>
                        <ul class="text-md lg:text-lg p-4">
                            <li class="list-disc list-inside">Structure Engineering</li>
                            <li class="list-disc list-inside">Road & Bridge Engineering</li>
                            <li class="list-disc list-inside">Geotech Engineering</li>
                            <li class="list-disc list-inside">Water Resources Management</li>
                            <li class="list-disc list-inside">Transportation Engineering</li>
                            <li class="list-disc list-inside">Disaster Mitigation</li>
                            <li class="list-disc list-inside">Construction Management</li>
                            <li class="list-disc list-inside">Earthquake Engineering</li>
                        </ul>
                    </div>
                @endforelse
            </div>
            <div class="flex flex-col lg:grid mx-6 grid-cols-2 items-center gap-6 pb-2 text-gray-700">
                <div class="shadow-lg rounded-lg w-full h-96">
                    <h3 class="text-xl lg:text-2xl text-white font-bold bg-gray-700 rounded-t-lg p-4">Electrical Engineering</h3>
                    <ul class="text-md lg:text-lg p-4">
                        <li class="list-disc list-inside">Power Transmission & Distribution</li>
                        <li class="list-disc list-inside">High Voltage Engineering</li>
                        <li class="list-disc list-inside">Renewable Energy</li>
                        <li class="list-disc list-inside">Smart Grid Technology</li>
                        <li class="list-disc list-inside">Robotics</li>
                        <li class="list-disc list-inside">Power Electronics</li>
                        <li class="list-disc list-inside">Signal & Image Processing</li>
                        <li class="list-disc list-inside">Embedded Systems</li>
                        <li class="list-disc list-inside">VLSI</li>
                        <li class="list-disc list-inside">Wireless & Mobile Communication</li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-lg w-full h-96">
                    <h3 class="text-xl lg:text-2xl text-white font-bold bg-red-600 rounded-t-lg p-4">Mechanical engineering</h3>
                    <ul class="text-md lg:text-lg p-4">
                        <li class="list-disc list-inside">Mechatronics & Robotics</li>
                        <li class="list-disc list-inside">Applied Mechanics</li>
                        <li class="list-disc list-inside">Biomedical Engineering</li>
                        <li class="list-disc list-inside">Composite & Materials Engineering</li>
                        <li class="list-disc list-inside">Computational Mechanics</li>
                        <li class="list-disc list-inside">Design Engineering</li>
                        <li class="list-disc list-inside">Thermal & Fluid Science</li>
                        <li class="list-disc list-inside">Automotive Engineering</li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center gap-6 pb-2 text-gray-700">
                <div class="shadow-lg mx-6 rounded-lg w-full h-full lg:h-96">
                    <h3 class="text-xl lg:text-2xl text-white font-bold bg-gray-700 rounded-t-lg p-4">Other (Business & Pharmaceutical Science)</h3>
                    <ul class="text-md lg:text-lg p-4">
                        <li class="list-disc list-inside">Business & Entrepreneurship in the Tech Era</li>
                        <li class="list-disc list-inside">Tech-Driven Business Strategies & Economic Sustainability</li>
                        <li class="list-disc list-inside">Financial Technology (FinTech) & Digital Economy</li>
                        <li class="list-disc list-inside">Digital Transformation & Smart Technologies</li>
                        <li class="list-disc list-inside">Sustainability, ESG & Green Business Practices</li>
                        <li class="list-disc list-inside">Power Electronics</li>
                        <li class="list-disc list-inside">Marketing & Consumer Behaviour in the Digital Age</li>
                        <li class="list-disc list-inside">Leadership, Innovation Management & Corporate Strategy</li>
                        <li class="list-disc list-inside">Pharmaceutical Formulation, Biotechnology & Drug Design</li>
                        <li class="list-disc list-inside">Herbal Technology, Pharmacology, and Regulatory Compliance</li>
                    </ul>
                </div>
            </div>
        </div>
    @endif
    @if (auth()->check())
        <div class="relative top-10 justify-center w-full z-10 flex items-center text-lg">
            <a href="{{ url('e/topics') }}" class="flex items-center text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 px-4 py-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 me-2">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endif
</div>