<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        $participants = Participant::orderBy('order')->get();

        return view('admin.edit_participant', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,
            'participants' => $participants
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $request->validate([
            'participants' => 'required|array|min:1',
            'participants.*.title' => 'required|string|max:255',
        ]);
        
        try {
            Participant::truncate();

            foreach ($request->participants as $index => $participant) {
                Participant::create([
                    'title' => $participant['title'],
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
