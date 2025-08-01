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

        $awards = Awards::all();

        return view('admin.edit_awards', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,

            'awards' => $awards
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'awards' => 'required|array',
            'awards.*.title' => 'required|string',
            'awards.*.description' => 'required|string',
            'awards.*.icon' => 'required|string'
        ]);

        try {
            foreach ($request->awards as $index => $awardData) {
                $award = Awards::find($index + 1);
                
                if ($award) {
                    $award->update([
                        'title' => $awardData['title'],
                        'description' => $awardData['description'],
                        'icon' => $awardData['icon']
                    ]);
                }
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured: ' . $e->getMessage());
        }
    }
}
