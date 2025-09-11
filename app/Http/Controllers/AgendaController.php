<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AgendaController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $description = Agenda::where('id', 1)->first();
        $agenda = Agenda::where('id', '!=', 1)->orderBy('order')->get();

        return view('admin.edit_agenda', with([
            'description' => $description ? $description->description : '',
            'agenda' => $agenda
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $request->validate([
            'description' => 'required|string',
            'agenda' => 'required|array|min:1',
            'agenda.*.agenda' => 'required|string|max:255',
            'agenda.*.timeline' => 'required|string|max:255',
        ]);
        
        try {
            // Update description for id=1
            Agenda::updateOrCreate(
                ['id' => 1],
                ['description' => $request->description]
            );

            // Handle agenda items (excluding id=1)
            Agenda::where('id', '!=', 1)->delete();

            foreach ($request->agenda as $index => $agendas) {
                Agenda::create([
                    'agenda' => $agendas['agenda'],
                    'timeline' => $agendas['timeline'],
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
