<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <x-head :ac="$ac" :name="$app_name" :version="$app_version"></x-head>
</head>
<body class="font-['Outfit'] bg-gray-900 min-h-screen flex items-center justify-center">
    <form class="max-w-sm w-3/4 mx-auto" method="POST" action="{{ route('auth') }}">
        @csrf
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="user@example.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="••••••••" required />
            @error('password')
            <div class="text-red-500 text-sm mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="flex flex-col">
            <div class="flex items-center gap-2 mb-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 dark:bg-gray-700 dark:border-gray-600" />
                <label for="remember" class="text-sm font-medium text-gray-900 dark:text-gray-300">Remember Me</label>
            </div>
            <button type="submit" class="select-none cursor-pointer text-white bg-red-700 hover:bg-red-800 focus:outline-none font-medium rounded-lg text-sm w-fit sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700">Login</button>
        </div>
    </form>
</body>
</html>