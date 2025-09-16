@extends('layouts.app')

@section('title', 'Account Settings')

@section('content')
<section class="font-['Poppins'] bg-gray-900 min-h-screen flex items-center justify-center">
    @if($errors->any())
        <div class="fixed top-4 right-4 border-1 bg-gray-800 border-red-500 text-white px-4 py-2 rounded-lg shadow-lg z-50">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="list-disc list-inside">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <script>
        setTimeout(function() {
            const notifications = document.querySelectorAll('.fixed');
            notifications.forEach(function(notification) {
                notification.style.transition = 'opacity 0.5s';
                notification.style.opacity = '0';
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 500);
            });
        }, 5000);
    </script>
    <main class="flex justify-center w-full my-5">
        <form class="max-w-md w-3/4 mx-auto" method="POST" action="{{ route('update.user') }}">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                <input type="name" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="Admin"  value="{{ old('name', $name)}}" />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="user@example.com"  value="{{ old('email', $email) }}" />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="••••••••"  autocomplete="off" />
            </div>
            <div class="mb-5">
                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="••••••••"  autocomplete="off" />
            </div>
            <div class="relative z-0 w-full flex items-center gap-2 group">
                <button type="submit" class="select-none w-full cursor-pointer text-white bg-red-700 hover:bg-red-800 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700">Update</button>
                <a href="{{ route('main')}}" class="flex items-center gap-2 px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 p-1">
                        <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </form>
    </main>
</section>
@endsection