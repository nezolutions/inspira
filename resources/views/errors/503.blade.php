<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="font-['Poppins']">
    <main class="w-full min-h-screen flex justify-center items-center bg-gradient-to-br from-white via-gray-100 to-gray-300 text-gray-800">
        <div class="w-full max-w-7xl flex flex-col p-8 gap-6">
            <img src="{{ asset('images/jgu-wxut.png') }}" draggable="false" class="w-60 xl:w-80">
            <div class="flex flex-col gap-2 ps-6 border-l-4 border-black">
                {{-- <span class="text-red-700 font-semibold text-2xl">{{ $title }}</span> --}}
                <h1 class="text-3xl xl:text-4xl font-extrabold text-red-600">This Website is Under Maintenance</h1>
                <p class="text-gray-800 text-lg xl:text-xl">We will be back soon. Thank you for your patience.</p>
            </div>
            <p class="block text-xs xl:text-sm text-gray-400 select-none">
                &copy; {{ now()->format('Y') }} <a target="_blank" href="http://www.jgu.ac.id" class="text-black/75 hover:underline">Jakarta Global University</a>. All Rights Reserved
                <span class="text-gray-400 hidden xl:inline">|</span>
                <span class="block xl:inline text-xs xl:text-sm text-gray-400">Developed by <a target="_blank" href="http://itic.jgu.ac.id" class="text-red-600 hover:underline">ITIC JGU</a></span>
            </p>
        </div>
    </main>
</body>
</html>