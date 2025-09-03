<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Agenda;
use App\Models\Home;
use App\Models\App;
use App\Models\Awards;
use App\Models\Competition;
use App\Models\Fee;
use App\Models\Participant;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

use function Termwind\parse;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Jakarta Global University',
            'email' => 'inspira@jgu.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'),
            'created_at' => now()
        ]);

        App::insert([
            'app_icon' => 'images/icon.png',
            'app_name' => json_encode([
                'JGU-WXUT ',
                'INSPIRA ' . now()->format('Y'),
            ]),
            'is_name_showed' => true,
            'is_image_fit' => false,
            'register' => 'https://docs.google.com/forms/d/e/1FAIpQLSc2z9QaxdUWjks7YKPsuhY8SJ1hqX6-x5CZVUoiNT3mBYd2zQ/viewform'
        ]);

        Home::create([
            'background' => 'images/background.png',
            'title' => '<b><em>International Forum</em></b> on Innovation, Strategy, and Presentation of Research Activity',
            'description' => 'Bridging engineering, business, and pharmaceutical expertise to advance technological innovation for global impact'
        ]);

        About::insert([
            'cover' => 'images/cover.png',
            'content' => 'is a premier academic platform organized by Jakarta Global University (JGU) that brings together emerging researchers, scholars, and innovators to showcase their ideas and insights in the fields of science, technology, business, and health. Under the theme “International Forum on Innovation, Strategy, and Presentation of Research title," this event aims to foster interdisciplinary collaboration, spark future-oriented thinking, and strengthen the research culture among the academic community. Through a dynamic combination of strategic forums, keynote lectures, and a competitive poster presentation, JGU INSPIRA serves as a catalyst for knowledge exchange, academic excellence, and impactful innovation aligned with global challenges and sustainable development goals (SDGs).',
            'highlights' => json_encode([
                'International Strategic Forum',
                'International Oral Presentation & Poster Competition',
            ]),
            'venue' => 'Jakarta Global University Ballroom | October 20-22 2025',
        ]);

        Agenda::insert([
            [
                'id' => 1,
                'description' => 'The highlight agenda is the <b>Strategic Forum titled "Strengthening the Triple Helix for Sustainable Growth and Innovation"</b>, which brings together thought leaders from academia, industry, and government. This forum aims to reinforce collaboration among key stakeholders in building a sustainable innovation ecosystem. Through panel discussions, interactive sessions, and the exchange of best practices, the forum will explore strategic pathways to drive knowledge- and technology-based economic development.',
                'agenda' => '-',
                'timeline' => '-',
                'order' => 0
            ],
            [
                'id' => 2,
                'description' => '-',
                'agenda' => 'Submission & Payment',
                'timeline' => 'Now - October 10 2025',
                'order' => 1
            ],
            [
                'id' => 3,
                'description' => '-',
                'agenda' => 'Poster Upload Dateline',
                'timeline' => 'October 10 2025',
                'order' => 2
            ],
            [
                'id' => 4,
                'description' => '-',
                'agenda' => 'Presentation (Online)',
                'timeline' => 'October 10-15 2025',
                'order' => 3
            ],
            [
                'id' => 5,
                'description' => '-',
                'agenda' => 'Presentation (Offline)',
                'timeline' => 'October 21 2025',
                'order' => 4
            ],
            [
                'id' => 6,
                'description' => '-',
                'agenda' => 'Announcement & Awards',
                'timeline' => 'October 22 2025',
                'order' => 5
            ],
        ]);

        // Participant::insert([
        //     [

        //         'title' => 'Researcher & Lecturer',
        //     ],
        //     [
        //         'title' => 'College/University Student',
        //     ],
        //     [
        //         'title' => 'High School Student',
        //     ]
        // ]);

        // Competition::insert([
        //     [
        //         'title' => 'Oral Presentation (Online via Zoom/Gmeet)',
        //         'content' => 'Participants will deliver a 10-minute research presentation followed by a 3-minute Q&A session with the judges. This category emphasizes clarity, scientific rigor, and effective communication. Presentations will be conducted online via Zoom/Gmeet.'
        //     ],
        //     [
        //         'title' => 'Poster Presentations (On-site)',
        //         'content' => 'Participants will present their research through a scientific poster in a face-to-face session with the judges. Each participant will have the opportunity to explain their work and engage in a brief Q&A session. This category emphasizes visual communication, content clarity, and the ability to discuss research findings concisely and confidently. Presentations will take place onsite at the event venue.'
        //     ],
        // ]);

        // Awards::insert([
        //     // 1
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path fill-rule="evenodd" d="M11.622 1.602a.75.75 0 0 1 .756 0l2.25 1.313a.75.75 0 0 1-.756 1.295L12 3.118 10.128 4.21a.75.75 0 1 1-.756-1.295l2.25-1.313ZM5.898 5.81a.75.75 0 0 1-.27 1.025l-1.14.665 1.14.665a.75.75 0 1 1-.756 1.295L3.75 8.806v.944a.75.75 0 0 1-1.5 0V7.5a.75.75 0 0 1 .372-.648l2.25-1.312a.75.75 0 0 1 1.026.27Zm12.204 0a.75.75 0 0 1 1.026-.27l2.25 1.312a.75.75 0 0 1 .372.648v2.25a.75.75 0 0 1-1.5 0v-.944l-1.122.654a.75.75 0 1 1-.756-1.295l1.14-.665-1.14-.665a.75.75 0 0 1-.27-1.025Zm-9 5.25a.75.75 0 0 1 1.026-.27L12 11.882l1.872-1.092a.75.75 0 1 1 .756 1.295l-1.878 1.096V15a.75.75 0 0 1-1.5 0v-1.82l-1.878-1.095a.75.75 0 0 1-.27-1.025ZM3 13.5a.75.75 0 0 1 .75.75v1.82l1.878 1.095a.75.75 0 1 1-.756 1.295l-2.25-1.312a.75.75 0 0 1-.372-.648v-2.25A.75.75 0 0 1 3 13.5Zm18 0a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.372.648l-2.25 1.312a.75.75 0 1 1-.756-1.295l1.878-1.096V14.25a.75.75 0 0 1 .75-.75Zm-9 5.25a.75.75 0 0 1 .75.75v.944l1.122-.654a.75.75 0 1 1 .756 1.295l-2.25 1.313a.75.75 0 0 1-.756 0l-2.25-1.313a.75.75 0 1 1 .756-1.295l1.122.654V19.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
        //             </svg>
        //         ',
        //         'title' => 'Best Research Project',
        //         'description' => 'Awarded to the most outstanding research project in terms of scientific contribution, methodological rigor, and novelty of ideas.',
        //         'category' => 'Researchers and Lecturers'
        //     ],
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
        //                 <path fill-rule="evenodd" d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z" clip-rule="evenodd" />
        //             </svg>
        //         ',
        //         'title' => 'Innovation for Society Award',
        //         'description' => 'Given to the project that demonstrates the greatest impact on society or effectively addresses real-world challenges through innovative solutions.',
        //         'category' => 'Researchers and Lecturers'
        //     ],
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"/>
        //             </svg>
        //         ',
        //         'title' => "Judges' Choice Award",
        //         'description' => 'A special recognition granted based on the collective evaluation and discretion of the panel of judges, considering originality, relevance, and presentation.',
        //         'category' => 'Researchers and Lecturers'
        //     ],
        //     // 2
        //     [
        //         'icon' => '
        //            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z"/>
        //             </svg>
        //         ',
        //         'title' => 'Best Student Project',
        //         'description' => 'Presented to the student-led project that excels in innovation, relevance to current issues, and overall execution.',
        //         'category' => 'College/University Student'
        //     ],
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"> 
        //                 <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
        //             </svg>
        //         ',
        //         'title' => 'Best Poster Design',
        //         'description' => "Awarded for the most visually compelling and well-structured poster that effectively communicates the project's objectives, methodology, and results.",
        //         'category' => 'College/University Student'
        //     ],
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9.75zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/>
        //             </svg>
        //         ',
        //         'title' => 'Best Presentation',
        //         'description' => 'Recognizes the participant who delivers the most clear, engaging, and professional oral presentation.',
        //         'category' => 'College/University Student'
        //     ],
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path d="M9.375 3a1.875 1.875 0 0 0 0 3.75h1.875v4.5H3.375A1.875 1.875 0 0 1 1.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0 1 12 2.753a3.375 3.375 0 0 1 5.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 1 0-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3ZM11.25 12.75H3v6.75a2.25 2.25 0 0 0 2.25 2.25h6v-9ZM12.75 12.75v9h6.75a2.25 2.25 0 0 0 2.25-2.25v-6.75h-9Z" />
        //             </svg>
        //         ',
        //         'title' => 'Gold/Silver/Bronze Award',
        //         'description' => 'Given to the top three student projects that demonstrate exceptional quality across all assessment criteria.',
        //         'category' => 'College/University Student'
        //     ],
        //     // 3
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
        //             </svg>
        //         ',
        //         'title' => 'Best Young Innovator Project',
        //         'description' => 'Granted to the high school project that showcases outstanding creativity, problem-solving, and potential for further development.',
        //         'category' => 'High School Student'
        //     ],
        //     [
        //         'icon' => '
        //             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        //                 <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
        //             </svg>
        //         ',
        //         'title' => 'Best Visual Poster',
        //         'description' => 'Awarded for the most visually attractive and easy-to-understand poster among high school participants.',
        //         'category' => 'High School Student'
        //     ]
        // ]);

        Fee::insert([
            [
                'title' => 'International Participant',
                'online_fee' => 50,
                'on_fee_type' => 'USD',
                'offline_fee' => 50,
                'off_fee_type' => 'USD',
                'order' => 1
            ],
            [
                'title' => 'Researcher & Lecturer',
                'online_fee' => 400000,
                'on_fee_type' => 'IDR',
                'offline_fee' => 300000,
                'off_fee_type' => 'IDR',
                'order' => 2
            ],
            [
                'title' => 'College/University Student',
                'online_fee' => 300000,
                'on_fee_type' => 'IDR',
                'offline_fee' => 200000,
                'off_fee_type' => 'IDR',
                'order' => 3
            ],
            [
                'title' => 'High School Student',
                'online_fee' => 150000,
                'on_fee_type' => 'IDR',
                'offline_fee' => 100000,
                'off_fee_type' => 'IDR',
                'order' => 4
            ]
        ]);
    }
}
