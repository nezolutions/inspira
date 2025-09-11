@extends('layouts.app')

@php
    if (isset($app)) {
        $title = $app->app_name[0] .' '. $app->app_name[1];
    } else {    
        $title = 'JGU-WXUT INSPIRA ' . now()->format('Y');     
    }
@endphp

@section('title', $title)

@section('content')
    <x-panel></x-panel>
    <x-modal></x-modal>
    <x-top></x-top>
    
    <header>
        @include('layouts.header')
    </header>

    <main class="main">
        <section id="home">
            @include('pages.home')
        </section>
        <section id="about">
            @include('pages.about')
        </section>
        <section id="agenda">
            @include('pages.agenda')
        </section>
        <section id="topics">
            @include('pages.topics')
        </section>
        <section id="category">
            @include('pages.category')
        </section>
        <section id="awards">
            @include('pages.awards')
        </section>
        <section id="fee">
            @include('pages.fee')
        </section>
    </main>
    
    <footer class="border-t border-gray-700">
        @include('layouts.footer')
    </footer>

    @include('layouts.navbar')
@endsection