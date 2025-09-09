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
            'password' => Hash::make('inspira@itic'),
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
                'timeline' => 'Now - October 10<sup>th</sup> 2025',
                'order' => 1
            ],
            [
                'id' => 3,
                'description' => '-',
                'agenda' => 'PowerPoint File and Poster Upload Dateline',
                'timeline' => 'October 10<sup>th</sup> 2025',
                'order' => 2
            ],
            [
                'id' => 4,
                'description' => '-',
                'agenda' => 'Oral Presentation Competition (Online)',
                'timeline' => 'October 10-15<sup>th</sup> 2025',
                'order' => 3
            ],
            [
                'id' => 5,
                'description' => '-',
                'agenda' => 'Poster Competition (Offline)',
                'timeline' => 'October 21<sup>st</sup> 2025',
                'order' => 4
            ],
            [
                'id' => 6,
                'description' => '-',
                'agenda' => 'Announcement & Awards',
                'timeline' => 'October 22<sup>nd</sup> 2025',
                'order' => 5
            ],
        ]);

        Topic::insert([
            [
                'title' => 'Informatics Engineering',
                'list' => json_encode([
                    'Mobile Applications',
                    'Biomedical Informatics',
                    'Security Systems',
                    'Database and Data Mining',
                    'Artificial Intelligence',
                    'Computer Network',
                ]),
            ],
            [
                'title' => 'Industrial Engineering',
                'list' => json_encode([
                    'Smart and Lean Manufacturing System',
                    'Product Design and Development',
                    'Digitalization Supply Chain',
                    'Green Manufacturing',
                    'Quality Management System',
                ]),
            ],
            [
                'title' => 'Civil Engineering',
                'list' => json_encode([
                    'Structure Engineering',
                    'Road and Bridge Engineering',
                    'Geotech Engineering',
                    'Water Resources Management',
                    'Transportation Engineering',
                    'Disaster Mitigation',
                    'Construction Management',
                    'Earthquake Engineering',
                ]),
            ],
            [
                'title' => 'Electrical Engineering',
                'list' => json_encode([
                    'Power Transmission and Distribution',
                    'High Voltage Engineering',
                    'Renewable Energy',
                    'Smart Grid Technology',
                    'Robotics',
                    'Power Electronics',
                    'Signal and Image Processing',
                    'Embedded Systems',
                    'VLSI',
                    'Wireless and Mobile Communication',
                ]),
            ],
            [
                'title' => 'Mechanical Engineering',
                'list' => json_encode([
                    'Mechatronics & Robotics',
                    'Applied Mechanics',
                    'Biomedical Engineering',
                    'Composite & Materials Engineering',
                    'Computational Mechanics',
                    'Design Engineering',
                    'Thermal & Fluid Science',
                    'Automotive Engineering',
                ]),
            ],
            [
                'title' => 'Other (Business and Pharmaceutical Science)',
                'list' => json_encode([
                    'Business and Entrepreneurship in the Tech Era',
                    'Tech-Driven Business Strategies and Economic Sustainability',
                    'Financial Technology (FinTech) and Digital Economy',
                    'Digital Transformation & Smart Technologies',
                    'Sustainability, ESG, and Green Business Practices',
                    'Marketing and Consumer Behaviour in the Digital Age',
                    'Leadership, Innovation Management, and Corporate Strategy',
                    'Pharmaceutical formulation, biotechnology, and drug design',
                    'Herbal technology, pharmacology, and regulatory compliance',
                ]),
            ],
        ]);

        Participant::insert([
            [
                'title' => 'Researcher & Lecturer',
                'icon' => 'images/icons8-research-64.png',
                'background' => 'images/back1.jpg'
            ], [
                'title' => 'College Student & Fresh Graduate (Max. Bachelor)',
                'icon' => 'images/icons8-college-64.png',
                'background' => 'images/back2.jpg'
            ], [
                'title' => 'Highschool Student',
                'icon' => 'images/icons8-book-64.png',
                'background' => 'images/back3.jpg'
            ],
        ]);

        Competition::insert([
            [
                'title' => 'Oral Presentation (Online via Zoom/Gmeet)',
                'content' => 'Participants will deliver a 10-minute research presentation followed by a 3-minute Q&A session with the judges. This category emphasizes clarity, scientific rigor, and effective communication. Presentations will be conducted online via Zoom/Gmeet.'
            ],
            [
                'title' => 'Poster Presentations (On-site)',
                'content' => 'Participants will present their research through a scientific poster in a face-to-face session with the judges. Each participant will have the opportunity to explain their work and engage in a brief Q&A session. This category emphasizes visual communication, content clarity, and the ability to discuss research findings concisely and confidently. Presentations will take place onsite at the event venue.'
            ],
        ]);

        Awards::insert([
            // 1
            [
                'category' => 'Researchers and Lecturers',
                'title' => 'Best Research Project',
                'description' => 'Awarded to the most outstanding research project in terms of scientific contribution, methodological rigor, and novelty of ideas.',
                'online_prize' => 2000000,
                'offline_prize' => 4000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 1
            ],
            [
                'category' => 'Researchers and Lecturers',
                'title' => 'Innovation for Society Award',
                'description' => 'Given to the project that demonstrates the greatest impact on society or effectively addresses real-world challenges through innovative solutions.',
                'online_prize' => 1250000,
                'offline_prize' => 2500000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 2
            ],
            [
                'category' => 'Researchers and Lecturers',
                'title' => 'Judges\' Choice Award',
                'description' => 'A special recognition granted based on the collective evaluation and discretion of the panel of judges, considering originality, relevance, and presentation.',
                'online_prize' => 1000000,
                'offline_prize' => 2000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 3
            ],
            // 2
            [
                'category' => 'College Students 1',
                'title' => 'Best Student Project',
                'description' => 'Presented to the student-led project that excels in innovation, relevance to current issues, and overall execution.',
                'online_prize' => 1250000,
                'offline_prize' => 2500000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 1
            ],
            [
                'category' => 'College Students 1',
                'title' => 'Best Design',
                'description' => 'Awarded for the most visually compelling and well-structured presentation file/poster that effectively communicates the project\'s objectives, methodology, and results.',
                'online_prize' => 1000000,
                'offline_prize' => 2000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 2
            ],
            [
                'category' => 'College Students 1',
                'title' => 'Best Presentation',
                'description' => 'Recognizes the participant who delivers the most clear, engaging, and professional presentation.',
                'online_prize' => 1000000,
                'offline_prize' => 2000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 3
            ],
            [
                'category' => 'College Students 2',
                'title' => 'Gold/Silver/Bronze Award',
                'description' => 'Given to the top three student projects that demonstrate exceptional quality across all assessment criteria.',
                'online_prize' => 0,
                'offline_prize' => 0,
                'on_gold' => 1000000,
                'off_gold' => 2000000,
                'on_silver' => 500000,
                'off_silver' => 1000000,
                'on_bronze' => 250000,
                'off_bronze' => 500000,
                'order' => 4
            ],
            // 3
            [
                'category' => 'Highschool Students',
                'title' => 'Best Young Innovator Project',
                'description' => 'Granted to the high school project that showcases outstanding creativity, problem-solving, and potential for further development.',
                'online_prize' => 500000,
                'offline_prize' => 1000000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 1
            ],
            [
                'category' => 'Highschool Students',
                'title' => 'Best Presentation File/Poster',
                'description' => 'Awarded for the most visually attractive and easy-to-understand presentation file/poster among high school participants.',
                'online_prize' => 250000,
                'offline_prize' => 500000,
                'on_gold' => 0,
                'off_gold' => 0,
                'on_silver' => 0,
                'off_silver' => 0,
                'on_bronze' => 0,
                'off_bronze' => 0,
                'order' => 2
            ],
        ]);

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
                'title' => 'College Student & Fresh Graduate <br><span class="text-sm text-red-600">(Max. Bachelor)</span>',
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
