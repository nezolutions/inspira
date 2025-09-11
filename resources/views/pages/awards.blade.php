<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-50">
    <div class="space-y-12 w-full max-w-7xl px-6">
      
    <!-- Section Title -->
	<div class="flex flex-col items-center justify-center">
		<h2 class="text-4xl lg:text-5xl text-center font-extrabold text-gray-800 mb-4">
			Awards
		</h2>
		<div class="w-32 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
	</div>
  
    <div class="space-y-8">
        <h3 class="font-bold text-xl lg:text-2xl text-gray-700 text-center lg:text-left flex items-center gap-1">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600">
				<path d="M9.375 3a1.875 1.875 0 0 0 0 3.75h1.875v4.5H3.375A1.875 1.875 0 0 1 1.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0 1 12 2.753a3.375 3.375 0 0 1 5.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 1 0-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3ZM11.25 12.75H3v6.75a2.25 2.25 0 0 0 2.25 2.25h6v-9ZM12.75 12.75v9h6.75a2.25 2.25 0 0 0 2.25-2.25v-6.75h-9Z" />
			</svg>				  
			Researchers and Lecturers
		</h3>
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
			@forelse ($awards->where('category', 'Researchers and Lecturers') as $a1)
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col transition transform hover:-translate-y-1">
					<h3 class="text-lg font-bold text-gray-800 mb-2">{{ $a1->title }}</h3>
					<p class="text-sm text-gray-600 flex-grow">
						{{ $a1->description }}
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">IDR {{ number_format($a1->online_prize, 0, ',', '.') }}</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">IDR {{ number_format($a1->offline_prize, 0, ',', '.') }}</p>
					</div>
				</div>
			@empty
				<!-- Best Research Project -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Best Research Project</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Awarded to the most outstanding research project in terms of scientific contribution,
						methodological rigor, and novelty of ideas.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">2.000.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">4.000.000 IDR</p>
					</div>
				</div>
				
				<!-- Innovation for Society Award -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Innovation for Society Award</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Given to the project that demonstrates the greatest impact on society or effectively addresses
						real-world challenges through innovative solutions.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">1.250.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">2.500.000 IDR</p>
					</div>
				</div>
				
				<!-- Judges' Choice Award -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Judges' Choice Award</h3>
					<p class="text-sm text-gray-600 flex-grow">
						A special recognition granted based on the collective evaluation and discretion of the panel
						of judges, considering originality, relevance, and presentation.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">1.000.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">2.000.000 IDR</p>
					</div>
				</div>
			@endforelse
		</div>
    </div>

	<div class="space-y-8">
        <h3 class="font-bold text-xl lg:text-2xl text-gray-700 text-center lg:text-left flex items-center gap-1">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600">
				<path d="M9.375 3a1.875 1.875 0 0 0 0 3.75h1.875v4.5H3.375A1.875 1.875 0 0 1 1.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0 1 12 2.753a3.375 3.375 0 0 1 5.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 1 0-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3ZM11.25 12.75H3v6.75a2.25 2.25 0 0 0 2.25 2.25h6v-9ZM12.75 12.75v9h6.75a2.25 2.25 0 0 0 2.25-2.25v-6.75h-9Z" />
			</svg>				  
			College Students
		</h3>
		<div class="grid md:grid-cols-3 gap-6">
			@forelse ($awards->where('category', 'College Students 1') as $a2)
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col transition transform hover:-translate-y-1">
					<h3 class="text-lg font-bold text-gray-800 mb-2">{{ $a2->title }}</h3>
					<p class="text-sm text-gray-600 flex-grow">
						{{ $a2->description }}
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">IDR {{ number_format($a2->online_prize, 0, ',', '.') }}</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">IDR {{ number_format($a2->offline_prize, 0, ',', '.') }}</p>
					</div>
				</div>
			@empty
				<!-- Best Student Project -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Best Student Project</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Presented to the student-led project that 
						excels in innovation, relevance to current issues, and overall execution.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">1.250.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">2.500.000 IDR</p>
					</div>
				</div>
				
				<!-- Best Poster Design -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Best Poster Design</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Awarded for the most visually compelling and well-structured poster that effectively
						communicates the project's objectives, methodology, and results.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">1.000.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">2.000.000 IDR</p>
					</div>
				</div>
				
				<!-- Best Presentation -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Best Presentation</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Recognizes the participant who delivers the most clear, engaging,
						and professional oral presentation.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">1.000.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">2.000.000 IDR</p>
					</div>
				</div>
			@endforelse
		</div>

		<div class="grid grid-cols-1 justify-center gap-6">
			@forelse ($awards->where('category', 'College Students 2') as $a2)
			<!-- Gold/Silver/Bronze Award -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col transition transform hover:-translate-y-1">
					<h3 class="text-lg font-bold text-gray-800 mb-2">{{ $a2->title }}</h3>
					<p class="text-sm text-gray-600 flex-grow">
						{{ $a2->description }}
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<div class="flex flex-col lg:flex-row items-start lg:items-center gap-2">
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-amber-400 px-1 rounded-sm">Gold</span>
								<span class="before:content-['IDR']">	
								{{ number_format($a2->on_gold, 0, ',', '.') }}
								</span>
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-neutral-300 px-1 rounded-sm">Silver</span>
								<span class="before:content-['IDR']">	
								{{ number_format($a2->on_silver, 0, ',', '.') }}
								</span>
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-yellow-800 px-1 rounded-sm">Bronze</span>
								<span class="before:content-['IDR']">	
								{{ number_format($a2->on_bronze, 0, ',', '.') }}
								</span>
							</p>
						</div>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<div class="flex flex-col lg:flex-row items-start lg:items-center gap-2">
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-amber-400 px-1 rounded-sm">Gold</span>
								<span class="before:content-['IDR']">	
								{{ number_format($a2->off_gold, 0, ',', '.') }}
								</span>
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-neutral-300 px-1 rounded-sm">Silver</span>
								<span class="before:content-['IDR']">	
								{{ number_format($a2->off_silver, 0, ',', '.') }}
								</span>
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-yellow-800 px-1 rounded-sm">Bronze</span>
								<span class="before:content-['IDR']">	
								{{ number_format($a2->off_bronze, 0, ',', '.') }}
								</span>
							</p>
						</div>
					</div>
				</div>
			@empty
				<!-- Gold/Silver/Bronze Award -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Gold/Silver/Bronze Award</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Given to the top three student projects
						that demonstrate exceptional quality across all assessment criteria.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<div class="flex flex-col lg:flex-row items-start lg:items-center gap-2">
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-amber-400 px-1 rounded-sm">Gold</span>
								1.000.000 IDR
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-neutral-300 px-1 rounded-sm">Silver</span>
								500.000 IDR
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-yellow-800 px-1 rounded-sm">Bronze</span>
								250.000 IDR
							</p>
						</div>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<div class="flex flex-col lg:flex-row items-start lg:items-center gap-2">
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-amber-400 px-1 rounded-sm">Gold</span>
								2.000.000 IDR
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-neutral-300 px-1 rounded-sm">Silver</span>
								1.000.000 IDR
							</p>
							<p class="text-lg font-semibold text-gray-800">
								<span class="bg-yellow-800 px-1 rounded-sm">Bronze</span>
								500.000 IDR
							</p>
						</div>
					</div>
				</div>
			@endforelse
		</div>
	</div>

	<div class="space-y-8">
        <h3 class="font-bold text-xl lg:text-2xl text-gray-700 text-center lg:text-left flex items-center gap-1">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-600">
				<path d="M9.375 3a1.875 1.875 0 0 0 0 3.75h1.875v4.5H3.375A1.875 1.875 0 0 1 1.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0 1 12 2.753a3.375 3.375 0 0 1 5.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 1 0-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3ZM11.25 12.75H3v6.75a2.25 2.25 0 0 0 2.25 2.25h6v-9ZM12.75 12.75v9h6.75a2.25 2.25 0 0 0 2.25-2.25v-6.75h-9Z" />
			</svg>				  
			Highschool Students
		</h3>
		<div class="grid md:grid-cols-2 gap-6">
			@forelse ($awards->where('category', 'Highschool Students') as $a3)
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col transition transform hover:-translate-y-1">
					<h3 class="text-lg font-bold text-gray-800 mb-2">{{ $a3->title }}</h3>
					<p class="text-sm text-gray-600 flex-grow">
						{{ $a3->description }}
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">IDR {{ number_format($a3->online_prize, 0, ',', '.') }}</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">IDR {{ number_format($a3->offline_prize, 0, ',', '.') }}</p>
					</div>
				</div>
				@empty
				<!-- Best Young Innovator Project -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Best Young Innovator Project</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Granted to the high school project that showcases outstanding creativity,
						problem-solving, and potential for further development.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">500.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">1.000.000 IDR</p>
					</div>
				</div>
				
				<!-- Best Visual Poster -->
				<div class="border rounded-2xl shadow-lg p-6 flex flex-col">
					<h3 class="text-lg font-bold text-gray-800 mb-2">Best Visual Poster</h3>
					<p class="text-sm text-gray-600 flex-grow">
						Awarded for the most visually attractive
						and easy-to-understand poster among high school participants.
					</p>
					<div class="mt-4 border-t pt-4">
						<p class="text-xs text-gray-500">Oral Presentation (Online)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">250.000 IDR</p>
						<p class="text-xs text-gray-500 mt-2">Poster Presentation (Offline)</p>
						<p class="text-lg font-semibold text-gray-800 before:content-['IDR ']">500.000 IDR</p>
					</div>
				</div>
			@endforelse
		</div>
    </div>
	
	@auth
		<div class="mt-10 flex justify-center">
			<a href="{{ url('e/awards')}}" class="flex items-center gap-2 text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
					<path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
					<path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
				</svg>
				Edit
			</a>
		</div>
	@endauth
</div>
  