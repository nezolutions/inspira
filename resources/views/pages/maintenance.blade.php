@extends('layouts.app')


@php
    if (isset($app)) {
        $title = $app->app_name[0] .' '. $app->app_name[1];
        $icon = $app->app_icon;
    } else {    
        $title = 'JGU-WXUT INSPIRA ' . now()->format('Y');
        $icon = 'images/jgu-wxut.png';
    }
@endphp

@section('title', $title)
 
@section('content')
    <section id="maintenancez" class="w-full min-h-screen flex justify-center items-center bg-gradient-to-br from-white via-gray-100 to-gray-300 text-gray-800">
        <div class="w-full max-w-7xl flex flex-col p-8 gap-6">
            <img src="{{ $icon ?? asset('images/jgu-wxut.png') }}" draggable="false" class="w-60 xl:w-80">
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
    </section>
@endsection