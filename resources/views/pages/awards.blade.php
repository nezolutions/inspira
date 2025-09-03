<div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-50">
    <div class="space-y-12 w-full max-w-7xl px-6">
      
      <!-- Title -->
      <div class="flex flex-col items-center justify-center">
        <h2 class="text-3xl lg:text-4xl font-bold mb-3 text-gray-800">Awards</h2>
        <div class="w-24 h-1 bg-gradient-to-r from-red-600 to-red-400 rounded-full"></div>
      </div>
  
      <!-- Category: Researchers -->
      <div class="space-y-8">
        <h3 class="font-bold text-xl lg:text-2xl text-gray-700 text-center lg:text-left">Researchers and Lecturers</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="awards-1">
          @forelse ($awards->where('category', 'Researchers and Lecturers') as $a1)
            <div class="group relative flex flex-col items-center justify-start p-6 rounded-2xl shadow-xl h-80 lg:h-96 
                        bg-gradient-to-br {{ $a1->id % 2 === 1 ? 'from-red-600 to-red-500' : 'from-gray-800 to-gray-700' }} 
                        text-white transition-transform duration-500 hover:scale-105 hover:shadow-2xl">
              
              <!-- Icon -->
              <div class="bg-white/20 rounded-full p-4 mb-4 group-hover:bg-white/30 transition">
                {!! $a1->icon !!}
              </div>
  
              <!-- Title -->
              <h3 class="text-2xl lg:text-3xl font-semibold tracking-wide mb-2 group-hover:text-yellow-300 transition">
                {{ $a1->title }}
              </h3>
  
              <!-- Description -->
              <p class="text-sm lg:text-base text-gray-200 leading-relaxed">
                {{ $a1->description }}
              </p>
            </div>
          @empty
            <p class="text-center text-gray-500 col-span-full">No awards available yet.</p>
          @endforelse
        </div>
      </div>
  
      <!-- Tambahkan kategori lainnya dengan pola yang sama -->
      <!-- College/University, High School ... -->
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
  