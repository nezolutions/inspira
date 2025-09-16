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
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Header</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Header	JGU & WXUT logos, Event Title, Poster Title</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Authors</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Participant's name, institution, email</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Background / Introduction</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Problem background</td>
                        </tr>   
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Objectives / Aims</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Research or project objectives</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Methodology</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Methods (if research), or program steps if not research</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Results / Insights</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Findings, solutions, or key ideas</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Conclusion / Impact</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Conclusions, impacts, recommendations</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">References</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Concise, only 2-3 references (if any)</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Acknowledgement</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">(Optional) If part of a university program or supervised by a lecturer</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Visual</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">Images, graphs, icons, or photos supporting the content</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-auto xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Footer</td>
                            <td class="w-md xl:w-5xl py-4 px-6 text-sm xl:text-lg">QR code/link if including a video presentation or full publication (optional)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="w-fit p-6 bg-amber-100 border border-amber-200 rounded-xl shadow-xl">
                <h2 class="text-xl mb-2 font-semibold tracking-tight">Poster Format</h2>
                <ul>
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
                </ul>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-center xl:justify-start gap-4">
                <a href="{{ asset('docs/Format Poster 01.docx')}}" class="group inline-flex items-center text-base xl:text-lg px-5 xl:px-6 py-2.5 xl:py-3 rounded-xl font-bold uppercase tracking-wide text-white bg-gradient-to-r from-red-600 to-red-500 hover:from-red-700 hover:to-red-600 shadow-lg shadow-red-800/40 transition-transform duration-300 hover:scale-105 pulsate-bck">View Format Document</a>
                <a href="{{ route('main') }}" class="group inline-flex items-center text-base xl:text-lg px-5 xl:px-6 py-2.5 xl:py-3 rounded-xl font-bold uppercase tracking-wide text-white bg-gradient-to-r from-gray-500 to-gray-700 hover:from-gray-700 hover:to-gray-900 shadow-lg shadow-gray-800/40 transition-transform duration-300 hover:scale-105">
                    Back To Home
                </a>
            </div>
        </div>
    </div>
</section>

<footer class="border-t border-gray-700">
    @include('layouts.footer')
</footer>

@include('layouts.navbar')
@endsection