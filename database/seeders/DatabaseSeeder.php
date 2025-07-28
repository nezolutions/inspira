<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AgendaTable;
use App\Models\AgendaText;
use App\Models\Home;
use App\Models\App;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Admin',
            'email' => 'inspira@jgu.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'),
            'created_at' => now()
        ]);

        App::insert([
            'app_icon' => 'assets/images/logo.png',
            'app_name' => 'INSPIRA',
            'app_version' => 2025,
            'app_link' => 'https://docs.google.com/forms/d/e/1FAIpQLScu_P8sgARBq5Apvboqu9yqBMFHLTYgI_jSWtdVrMeVyNSD5w/viewform',
            'university' => 'JGU'
        ]);

        Home::insert([
            'background' => 'assets/images/background.jpg',
            'title' => 'International Forum on Innovation, Strategy, and Presentation of Research title',
            'description' => 'Bridging engineering, business, and pharmaceutical expertise to advance technological innovation for global impact'
        ]);

        About::insert([
            'logo' => 'assets/images/icon.png',
            'content' => 'is a premier academic platform organized by Jakarta Global University (JGU) that brings together emerging researchers, scholars, and innovators to showcase their ideas and insights in the fields of science, technology, business, and health. Under the theme “International Forum on Innovation, Strategy, and Presentation of Research title," this event aims to foster interdisciplinary collaboration, spark future-oriented thinking, and strengthen the research culture among the academic community. Through a dynamic combination of strategic forums, keynote lectures, and a competitive poster presentation, JGU INSPIRA serves as a catalyst for knowledge exchange, academic excellence, and impactful innovation aligned with global challenges and sustainable development goals (SDGs).'
        ]);

        
        AgendaTable::insert([
            [
                'title' => 'Submission & Payment',
                'prefix_date' => 'Now',
                'suffix_date' => Carbon::parse('2025-10-10')->format('F jS Y')
            ],
            [
                'title' => 'Poster Upload Dateline',
                'prefix_date' => Carbon::parse('2025-10-10')->format('F jS Y'),
                'suffix_date' => null
            ],
            [
                'title' => 'Presentation (Online)',
                'prefix_date' => Carbon::parse('2025-10-10')->format('F jS Y'),
                'suffix_date' => Carbon::parse('2025-10-15')->format('F jS Y')
            ],
            [
                'title' => 'Presentation (Offline)',
                'prefix_date' => Carbon::parse('2025-10-21')->format('F jS Y'),
                'suffix_date' => null
            ],
            [
                'title' => 'Announcement & Awards',
                'prefix_date' => Carbon::parse('2025-10-22')->format('F jS Y'),
                'suffix_date' => null
            ]
        ]);
        
        AgendaText::insert([
            'description' => 'The International Competition on Research Posters and Oral Presentations, open to students, early-career researchers, lecturer, and young professionals to present their research findings, innovative ideas, or ongoing development projects in a visual, data-driven format. More than just a competition, this title provides a platform for constructive academic dialogue, with evaluations by a panel of interdisciplinary experts.'
        ]);
    }
}
