<?php

namespace App\Http\Controllers;

use App\Models\Awards;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        $researchers = Awards::where('category', 'Researchers and Lecturers')->orderBy('order')->get();
        $collegeStudents = Awards::where('category', 'College/University Student')->orderBy('order')->get();
        $highSchoolStudents = Awards::where('category', 'High School Student')->orderBy('order')->get();

        return view('admin.edit_awards', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,
            'researchers' => $researchers,
            'collegeStudents' => $collegeStudents,
            'highSchoolStudents' => $highSchoolStudents
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'researchers' => 'required|array|min:1',
            'researchers.*.title' => 'required|string|max:255',
            'researchers.*.description' => 'required|string',
            'researchers.*.icon' => 'required|string',
            'collegeStudents' => 'required|array|min:1',
            'collegeStudents.*.title' => 'required|string|max:255',
            'collegeStudents.*.description' => 'required|string',
            'collegeStudents.*.icon' => 'required|string',
            'highSchoolStudents' => 'required|array|min:1',
            'highSchoolStudents.*.title' => 'required|string|max:255',
            'highSchoolStudents.*.description' => 'required|string',
            'highSchoolStudents.*.icon' => 'required|string',
        ]);

        try {
            // Clear existing awards
            Awards::truncate();

            // Insert Researchers and Lecturers
            foreach ($request->researchers as $index => $award) {
                Awards::create([
                    'title' => $award['title'],
                    'description' => $award['description'],
                    'icon' => $award['icon'],
                    'category' => 'Researchers and Lecturers',
                    'order' => $index
                ]);
            }

            // Insert College/University Students
            foreach ($request->collegeStudents as $index => $award) {
                Awards::create([
                    'title' => $award['title'],
                    'description' => $award['description'],
                    'icon' => $award['icon'],
                    'category' => 'College/University Student',
                    'order' => $index
                ]);
            }

            // Insert High School Students
            foreach ($request->highSchoolStudents as $index => $award) {
                Awards::create([
                    'title' => $award['title'],
                    'description' => $award['description'],
                    'icon' => $award['icon'],
                    'category' => 'High School Student',
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
