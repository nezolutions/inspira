<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Agenda;
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
        User::create([
            'name' => 'Admin',
            'email' => 'inspira@jgu.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('1234')
        ]);

        App::create([
            'app_icon' => 'assets/images/logo.png',
            'app_name' => 'INSPIRA',
            'app_version' => 2025,
            'app_link' => 'https://docs.google.com/forms/d/e/1FAIpQLScu_P8sgARBq5Apvboqu9yqBMFHLTYgI_jSWtdVrMeVyNSD5w/viewform',
            'university' => 'JGU'
        ]);

        Home::create([
            'background' => 'assets/images/background.jpg',
            'title' => 'International Forum on Innovation, Strategy, and Presentation of Research Activity',
            'description' => 'Bridging engineering, business, and pharmaceutical expertise to advance technological innovation for global impact'
        ]);

        About::create([
            'logo' => 'assets/images/icon.png',
            'content' => 'is a premier academic platform organized by Jakarta Global University (JGU) that brings together emerging researchers, scholars, and innovators to showcase their ideas and insights in the fields of science, technology, business, and health. Under the theme “International Forum on Innovation, Strategy, and Presentation of Research Activity," this event aims to foster interdisciplinary collaboration, spark future-oriented thinking, and strengthen the research culture among the academic community. Through a dynamic combination of strategic forums, keynote lectures, and a competitive poster presentation, JGU INSPIRA serves as a catalyst for knowledge exchange, academic excellence, and impactful innovation aligned with global challenges and sustainable development goals (SDGs).'
        ]);

    }
}
