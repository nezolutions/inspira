<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\App;
use App\Models\Detail;
use App\Models\Format;
use App\Models\Home;
use App\Models\Maintenance;
use App\Models\Points;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompetitionController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $competitions = Competition::orderBy('order')->get();

        return view('admin.edit_competition', compact(['competitions']));
    }

    public function oral() {
        $mtc = Maintenance::first();

        if (!Auth::check() && $mtc->is_active) {
            return redirect()->route('maintenance');
        }

        $app = App::first();
        // Section Bg
        $home = Home::first();
        // Section Point
        $point = Points::orderBy('order')->get();
        // Section Details
        $detail = Detail::orderBy('order')->get();
        // Section Format
        $docs = Format::first();
        $format = Format::orderBy('order')->where('order', '>', 0)->get();

        return view('pages.oral', compact([
            'app',
            'home',
            'point',
            'detail',
            'format',
            'docs',
            'mtc'
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $request->validate([
            'competitions' => 'required|array|min:1',
            'competitions.*.title' => 'required|string|max:255',
            'competitions.*.content' => 'required|string',
        ]);
        
        try {
            Competition::truncate();

            foreach ($request->competitions as $index => $competition) {
                Competition::create([
                    'title' => $competition['title'],
                    'content' => $competition['content'],
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
