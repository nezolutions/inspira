<div class="relative z-0 w-full h-screen bg-red-600 blur-xs" style="background-image: url('{{ $home->background ?? 'images/background.png' }}'); background-size: cover; background-position: center; background-attachment: fixed;"></div>
<div class="absolute top-0 z-10 w-full h-screen bg-gradient-to-b from-gray-600/75 to-gray-900/75"></div>
<div class="absolute z-20 top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-screen flex flex-col items-center justify-center">
    <div class="text-center space-y-4 mx-6">
        <p class="text-white text-xl lg:text-3xl font-semibold">{{ $app->app_name ?? 'JGU-WXUT INSPIRA ' . now()->format('Y') }}</p>
        <h1 class="text-white text-3xl lg:text-6xl font-bold">{{ $home->title ?? 'Lorem Ipsum' }}</h1>
        <p class="text-gray-200 text-lg lg:text-2xl">{{ $home->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis laudantium tenetur et suscipit minus, aut a quae provident quaerat quo reiciendis nisi impedit eius voluptatem dolores, nam consequatur neque?' }}</p>
    </div>
    @if (auth()->check())
        <div class="relative top-10 w-fit z-10 text-lg">
            <a href="{{ url('e/home') }}" class="flex items-center text-white bg-gray-700 rounded-full border hover:bg-gray-800 border-gray-600 px-4 py-2 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 me-2">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
            </a>
        </div>
    @endif
</div>