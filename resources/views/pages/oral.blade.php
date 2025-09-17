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

<header>
    @include('layouts.header')
</header>   

<section class="w-full min-h-screen bg-gray-100">
    @include('layouts.top')

    <div class="relative w-full min-h-32 xl:min-h-96 bg-gray-800 bg-cover bg-no-repeat bg-center bg-fixed" style="background-image: url('{{ asset('images/background.png') }}');"></div>

    <div class="relative z-20 w-full min-h-screen flex items-center justify-center">
        <div class="w-full min-h-screen max-w-7xl gap-8 px-6 py-12 space-y-10">
            <h1 class="text-4xl xl:text-6xl tracking-tight font-bold">
                Oral Presentation Format
            </h1>

            <p class="text-gray-800 text-base xl:text-xl">
                Each speaker is required to prepare a presentation (e.g., PowerPoint) consisting of five main slides:
            </p>

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">
                @php $num = 1 @endphp
                @forelse ($point as $presentation)
                    <div class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-3 flex items-center">
                        <div class="flex items-center gap-4">
                            <div class="min-w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                {{ $num++ }}
                            </div>
                            <h3 class="text-base xl:text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">{{ $presentation->content }}</h3>
                        </div>
                    </div>
                @empty
                    <div class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-3 flex items-center">
                        <div class="flex items-center gap-4">
                            <div class="min-w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                1
                            </div>
                            <h3 class="text-base xl:text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Background and Objectives</h3>
                        </div>
                    </div>

                    <div class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-3 flex items-center">
                        <div class="flex items-center gap-4">
                            <div class="min-w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                2
                            </div>
                            <h3 class="text-base xl:text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Research Methodology</h3>
                        </div>
                    </div>

                    <div class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-3 flex items-center">
                        <div class="flex items-center gap-4">
                            <div class="min-w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                3
                            </div>
                            <h3 class="text-base xl:text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Results and Discussion</h3>
                        </div>
                    </div>

                    <div class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-3 flex items-center">
                        <div class="flex items-center gap-4">
                            <div class="min-w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                4
                            </div>
                            <h3 class="text-base xl:text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Conclusions and Recommendations</h3>
                        </div>
                    </div>

                    <div class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-3 flex items-center">
                        <div class="flex items-center gap-4">
                            <div class="min-w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                5
                            </div>
                            <h3 class="text-base xl:text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Research Outcomes</h3>
                        </div>
                    </div>
                @endforelse
            </div>

            <p class="text-gray-800 text-base xl:text-xl">
                The details are presented as follows:
            </p>

            <div class="overflow-x-auto rounded-xl shadow-lg">
                <table class="min-w-full bg-white/80 backdrop-blur-sm text-gray-700 border border-gray-100">
                    <thead>
                        <tr class="bg-gradient-to-r from-red-600 to-red-500 text-white">
                            <th class="py-4 px-6 text-left text-lg xl:text-xl font-semibold">Section</th>
                            <th class="py-4 px-6 text-left text-lg xl:text-xl font-semibold">Content</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($detail as $d)
                            <tr class="{{ $d->id % 2 == 1 ? 'bg-red-50' : 'bg-white' }} hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">{{ $d->section }}</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">{{ $d->content }}</td>
                            </tr>
                        @empty
                            <tr class="bg-white hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Header</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">JGU & WXUT logos, Event Title, Poster Title</td>
                            </tr>
                            <tr class="bg-red-50 hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Authors</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Participant's name, institution, email</td>
                            </tr>
                            <tr class="bg-white hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Background / Introduction</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Problem background</td>
                            </tr>   
                            <tr class="bg-red-50 hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Objectives / Aims</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Research or project objectives</td>
                            </tr>
                            <tr class="bg-white hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Methodology</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Methods (if research), or program steps if not research</td>
                            </tr>
                            <tr class="bg-red-50 hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Results / Insights</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Findings, solutions, or key ideas</td>
                            </tr>
                            <tr class="bg-white hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Conclusion / Impact</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Conclusions, impacts, recommendations</td>
                            </tr>
                            <tr class="bg-red-50 hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">References</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Concise, only 2-3 references (if any)</td>
                            </tr>
                            <tr class="bg-white hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Acknowledgement</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">(Optional) If part of a university program or supervised by a lecturer</td>
                            </tr>
                            <tr class="bg-red-50 hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Visual</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Images, graphs, icons, or photos supporting the content</td>
                            </tr>
                            <tr class="bg-white hover:bg-red-100 transition">
                                <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Footer</td>
                                <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">QR code/link if including a video presentation or full publication (optional)</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="w-fit p-6 bg-amber-100 border border-amber-200 rounded-xl shadow-xl">
                <h2 class="text-xl xl:text-2xl mb-2 font-semibold tracking-tight">Poster Format</h2>
                <ul class="text-gray-600 space-y-1 text-sm xl:text-base">
                    @forelse ($format as $fm)
                        <li>
                            {!! $fm->content !!}
                        </li>
                    @empty
                        <li>
                            <span class="me-1 font-medium">Size:</span>A1 (594 x 841mm) - Portrait
                        </li>
                        <li>
                            <span class="me-1 font-medium">File Format:</span>PDF and PNG
                        </li>
                        <li>
                            <span class="me-1 font-medium">Font:</span>Use universal fonts (Arial, Calibri, Roboto)
                        </li>
                        <li>
                            <span class="me-1 font-medium">Color:</span>Creative use is allowed
                        </li>
                    @endforelse
                </ul>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-center xl:justify-start gap-4">
                <a href="{{ $docs->document ?? asset('docs/Format Poster 01.docx')}}" class="group inline-flex items-center text-base xl:text-lg px-5 xl:px-6 py-2.5 xl:py-3 rounded-xl font-bold uppercase tracking-wide text-white bg-gradient-to-r from-red-600 to-red-500 hover:from-red-700 hover:to-red-600 shadow-lg shadow-red-800/40 transition duration-300 hover:scale-105 pulsate-bck">View Format Document</a>
                <a href="{{ route('main') }}" class="group inline-flex items-center text-base xl:text-lg px-5 xl:px-6 py-2.5 xl:py-3 rounded-xl font-bold uppercase tracking-wide text-white bg-gradient-to-r from-gray-800 to-gray-700 hover:from-gray-900 hover:to-gray-800 shadow-lg shadow-gray-800/40 transition duration-300 hover:scale-105">
                    Back To Home
                </a>
            </div>
        </div>
    </div>

    @auth
        <div class="flex justify-center">
            <div class="flex items-center gap-2 select-none text-white bg-gray-800 hover:bg-black transition px-5 py-3 rounded-xl shadow-md text-base lg:text-lg group mb-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                </svg>
                Edit
                <span class="hidden group-hover:inline">:</span>
                <a href="{{ url('e/points') }}" class="hidden group-hover:inline hover:text-red-600 transition">&nbsp;Points&nbsp;</a>
                <span class="hidden group-hover:inline">/</span>
                <a href="{{ url('e/details') }}" class="hidden group-hover:inline hover:text-red-600 transition">&nbsp;Table</a>
                <span class="hidden group-hover:inline">/</span>
                <a href="{{ url('e/format') }}" class="hidden group-hover:inline hover:text-red-600 transition">&nbsp;Format</a>
            </div>
        </div>
    @endauth
</section>

<footer class="border-t border-gray-700">
    @include('layouts.footer')
</footer>

@include('layouts.navbar')
@endsection