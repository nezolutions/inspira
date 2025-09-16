@extends('layouts.app')

@section('title', 'Edit App')

@section('content')
<section class="font-['Poppins'] bg-gray-900 w-full min-h-screen flex items-center">
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
        <form class="max-w-md w-3/4 mx-auto" method="POST" action="{{ url('u/app') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex-1 items-center gap-2">
                @if (isset($app))
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" value="{{ old('app_name.0', $app->app_name[0]) }}" name="app_name[0]" id="app_name[0]" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="app_name[0]" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First Name</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" value="{{ old('app_name.1', $app->app_name[1]) }}" name="app_name[1]" id="app_name[1]" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                        <label for="app_name[1]" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last Name</label>
                    </div>
                @endif


                <div class="flex-1 mb-5 gap-2 text-gray-300 text-sm">
                    <div class="flex items-center gap-2 mb-2">
                        <input type="checkbox" name="is_fname_showed" id="is_fname_showed" value="{{ $app->is_fname_showed === 1 ?? 0}}" {{ $app->is_fname_showed ? 'checked' : ''}}>
                        <label>Show first name in navbar</label>
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <input type="checkbox" name="is_lname_showed" id="is_lname_showed" value="{{ $app->is_lname_showed === 1 ?? 0}}" {{ $app->is_lname_showed ? 'checked' : ''}}>
                        <label>Show last name in navbar</label>
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <input type="checkbox" name="is_image_fit" id="is_image_fit" value="{{ $app->is_image_fit === 1 ?? 0}}" {{ $app->is_image_fit ? 'checked' : ''}}>
                        <label>Aspect ratio to 1:1</label>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <div class="relative z-0 w-full mb-5 group ">
                    <input type="text" name="register" id="register" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " value="{{ old('register', $app->register) }}" required />
                    <label for="register" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Register URL</label>
                </div>
                <div class="flex items-center mb-5">
                    <a href="{{ $app->register ?? '#'}}" target="_blank" class="text-gray-500 hover:text-red-600 transition" title="Check Site">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>  
                    </a>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="app_icon" class="block text-sm font-medium text-white mb-2">Upload Icon</label>
                <input class="block w-full h-20 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="app_icon" type="file" name="app_icon">
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