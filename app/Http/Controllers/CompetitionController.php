<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        $competitions = Competition::orderBy('order')->get();

        return view('admin.edit_competition', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,
            'competitions' => $competitions
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
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
