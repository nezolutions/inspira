<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        // Get description from id=1
        $description = Agenda::where('id', 1)->first();
        
        // Get agenda items (excluding id=1)
        $agenda = Agenda::where('id', '!=', 1)->orderBy('order')->get();

        return view('admin.edit_agenda', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,

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
            'agenda.*.start_date' => 'required|date',
            'agenda.*.end_date' => 'date|nullable',
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
                    'prefix_date' => $agendas['start_date'] ? Carbon::parse($agendas['start_date'])->format('F jS Y') : now()->format('F jS Y'),
                    'suffix_date' => $agendas['end_date'] ? Carbon::parse($agendas['end_date'])->format('F jS Y') : null,
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
