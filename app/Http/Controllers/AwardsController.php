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

        $researchers = Awards::where('category', 'Researchers and Lecturers')->orderBy('order')->get();
        $collegeStudents = Awards::where('category', 'College Students')->orderBy('order')->get();
        $highSchoolStudents = Awards::where('category', 'Highschool Students')->orderBy('order')->get();

        return view('admin.edit_awards', compact([
            'researchers',
            'collegeStudents',
            'highSchoolStudents'
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'researchers' => 'array|min:1',
            'researchers.*.title' => 'string|max:255',
            'researchers.*.description' => 'string',
            'researchers.*.online_prize' => 'string',
            'researchers.*.offline_prize' => 'string',
            'collegeStudents' => 'array|min:1',
            'collegeStudents.*.title' => 'string|max:255',
            'collegeStudents.*.description' => 'string',
            'collegeStudents.*.online_prize' => 'string',
            'collegeStudents.*.offline_prize' => 'string',
            'collegeStudents.*.on_gold' => 'string',
            'collegeStudents.*.off_gold' => 'string',
            'collegeStudents.*.on_silver' => 'string',
            'collegeStudents.*.off_silver' => 'string',
            'collegeStudents.*.on_bronze' => 'string',
            'collegeStudents.*.off_bronze' => 'string',
            'highSchoolStudents' => 'array|min:1',
            'highSchoolStudents.*.title' => 'string|max:255',
            'highSchoolStudents.*.description' => 'string',
            'highSchoolStudents.*.online_prize' => 'string',
            'highSchoolStudents.*.offline_prize' => 'string',
        ]);

        try {
            // Hapus semua penghargaan yang ada
            Awards::truncate();

            // Masukkan Penghargaan untuk Peneliti dan Dosen
            foreach ($request->researchers as $index => $award) {
                Awards::create([
                    'title' => $award['title'],
                    'description' => $award['description'],
                    'online_prize' => $award['online_prize'],
                    'offline_prize' => $award['offline_prize'],
                    'on_gold' => $award['on_gold'] ?? 0,
                    'off_gold' => $award['off_gold'] ?? 0,
                    'on_silver' => $award['on_silver'] ?? 0,
                    'off_silver' => $award['off_silver'] ?? 0,
                    'on_bronze' => $award['on_bronze'] ?? 0,
                    'off_bronze' => $award['off_bronze'] ?? 0,
                    'category' => 'Researchers and Lecturers',
                    'order' => $index
                ]);
            }

            // Masukkan Penghargaan untuk Mahasiswa/i Perguruan Tinggi
            foreach ($request->collegeStudents as $index => $award) {
                Awards::create([
                    'title' => $award['title'],
                    'description' => $award['description'],
                    'online_prize' => $award['online_prize'] ?? 0,
                    'offline_prize' => $award['offline_prize'] ?? 0,
                    'on_gold' => $award['on_gold'] ?? 0,
                    'off_gold' => $award['off_gold'] ?? 0,
                    'on_silver' => $award['on_silver'] ?? 0,
                    'off_silver' => $award['off_silver'] ?? 0,
                    'on_bronze' => $award['on_bronze'] ?? 0,
                    'off_bronze' => $award['off_bronze'] ?? 0,
                    'category' => 'College Students',
                    'order' => $index
                ]);
            }

            // Masukkan Penghargaan untuk Siswa/i SMA
            foreach ($request->highSchoolStudents as $index => $award) {
                Awards::create([
                    'title' => $award['title'],
                    'description' => $award['description'],
                    'online_prize' => $award['online_prize'],
                    'offline_prize' => $award['offline_prize'],
                    'on_gold' => $award['on_gold'] ?? 0,
                    'off_gold' => $award['off_gold'] ?? 0,
                    'on_silver' => $award['on_silver'] ?? 0,
                    'off_silver' => $award['off_silver'] ?? 0,
                    'on_bronze' => $award['on_bronze'] ?? 0,
                    'off_bronze' => $award['off_bronze'] ?? 0,
                    'category' => 'Highschool Students',
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
