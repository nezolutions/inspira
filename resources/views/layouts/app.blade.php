<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <x-head :ac="$ac" :name="$app_name" :version="$app_version"></x-head>
</head>
<body class="font-['Outfit']">
    <x-logout></x-logout>
    <x-modal></x-modal>
    <header>
        @include('layouts.header')
    </header>
    <main>
        <section id="home">
            @include('pages.home')
        </section>
        <x-navbar></x-navbar>
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
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>