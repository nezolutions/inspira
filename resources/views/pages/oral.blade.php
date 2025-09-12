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

@include('layouts.top')

<section class="w-full min-h-screen bg-gray-100">
    <div class="relative w-full min-h-32 xl:min-h-96 bg-gray-800 bg-cover bg-no-repeat bg-center bg-fixed" style="background-image: url('{{ asset('images/background.png') }}');"></div>

    <div class="relative z-20 w-full min-h-screen flex items-center justify-center">
        <div class="w-full min-h-screen max-w-7xl gap-8 px-6 py-12 space-y-6">
            <h1 class="text-3xl xl:text-6xl tracking-tight font-bold">
                Oral Presentation Format
            </h1>

            <p class="text-gray-800 text-base xl:text-xl">
                Each speaker is required to prepare a presentation (e.g., PowerPoint) consisting of five main slides:
            </p>

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            1
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Background and Objectives</h3>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            2
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Research Methodology</h3>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            3
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Results and Discussion</h3>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            4
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Conclusions and Recommendations</h3>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-red-600 p-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            5
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Research Outcomes</h3>
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
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Header</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Header	JGU & WXUT logos, Event Title, Poster Title</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Authors</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Participant's name, institution, email</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Background / Introduction</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Problem background</td>
                        </tr>   
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Objectives / Aims</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Research or project objectives</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Methodology</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Methods (if research), or program steps if not research</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Results / Insights</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Findings, solutions, or key ideas</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Conclusion / Impact</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Conclusions, impacts, recommendations</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">References</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Concise, only 2-3 references (if any)</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Acknowledgement</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">(Optional) If part of a university program or supervised by a lecturer</td>
                        </tr>
                        <tr class="bg-red-50 hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Visual</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">Images, graphs, icons, or photos supporting the content</td>
                        </tr>
                        <tr class="bg-red-white hover:bg-red-100 transition">
                            <td class="w-40 xl:w-sm py-4 px-6 text-sm xl:text-lg font-medium">Footer</td>
                            <td class="w-sm xl:w-5xl py-4 px-6 text-sm xl:text-lg">QR code/link if including a video presentation or full publication (optional)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

<footer class="border-t border-gray-700">
    @include('layouts.footer')
</footer>

@include('layouts.navbar')
{{-- <div class="flex flex-col items-center justify-center w-full py-20 min-h-screen bg-gray-100">
    <div class="w-full max-w-7xl px-6">

        <h2>Oral Presentation Format</h2>

        <div>
            <div>
                Each speaker is required to prepare a presentation (e.g., PowerPoint) consisting of five main slides:
                <ul>
                    <li>(1) Background and Objectives,</li>
                    <li>(2) Research Methodology,</li>
                    <li>(3) Results and Discussion,</li>
                    <li>(4) Conclusions and Recommendations,</li>
                    <li>(5) Research Outcomes.</li>
                </ul>
                and  The details are presented as follows:
                <table border="1" class="oral-presentation-table border border-collapse">
                    <tr>
                        <td>Header</td>
                        <td>JGU & WXUT logos, Event Title, Poster Title</td>
                    </tr>
                    <tr>
                        <td>Authors</td>
                        <td>Authors	Participant's name, institution, email</td>
                    </tr>
                    <tr>
                        <td>Background / Introduction</td>
                        <td>Problem background</td>
                    </tr>
                    <tr>
                        <td>Objectives / Aims</td>
                        <td>Research or project objectives</td>
                    </tr>
                    <tr>
                        <td>Methodology</td>
                        <td>Methodology	Methods (if research), or program steps if not research</td>
                    </tr>
                    <tr>
                        <td>Results / Insights</td>
                        <td>Findings, solutions, or key ideas</td>
                    </tr>
                    <tr>
                        <td>Conclusion / Impact</td>
                        <td>Conclusions, impacts, recommendations</td>
                    </tr>
                    <tr>
                        <td>References</td>
                        <td>References	Concise, only 2-3 references (if any)</td>
                    </tr>
                    <tr>
                        <td>Acknowledgement</td>
                        <td>(Optional) If part of a university program or supervised by a lecturer</td>
                    </tr>
                    <tr>
                        <td>Visual</td>
                        <td>Images, graphs, icons, or photos supporting the content</td>
                    </tr>
                    <tr>
                        <td>Footer</td>
                        <td>QR code/link if including a video presentation or full publication (optional)</td>
                    </tr>
                </table>
            </div>
            <div>
                <ul>
                    <li>Size: A1 (594 x 841 mm) - portrait</li>
                    <li>File format: PDF and PNG</li>
                    <li>Font: Use universal fonts (Arial, Calibri, Roboto)</li>
                    <li>Color: Creative use is allowed</li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}
@endsection