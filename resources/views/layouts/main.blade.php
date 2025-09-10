@extends('layouts.app')

@section('title', $app->app_name[0] .' '. $app->app_name[1] ?? 'JGU-WXUT INSPIRA ' . now()->format('Y'))

@section('content')
    <x-panel></x-panel>
    <x-modal></x-modal>
    
    <header>
        @include('layouts.header')
    </header>

    <main>
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
        <section>
            @include('pages.addon')  
        </section>
    </main>
    
    <footer>
        @include('layouts.footer')
    </footer>

    @include('layouts.navbar')
@endsection