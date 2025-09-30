<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Agenda;
use App\Models\App;
use App\Models\Awards;
use App\Models\Competition;
use App\Models\FAQ;
use App\Models\Fee;
use App\Models\Home;
use App\Models\Maintenance;
use App\Models\Participant;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AppController extends Controller
{
    public function index() {
        $mtc = Maintenance::first();

        if (!Auth::check() && $mtc->is_active) {
            return redirect()->route('maintenance');
        }
        
        // Apps Info
        $app = App::first();
        // Section Home
        $home = Home::first();
        // Section About
        $about = About::first();
        // Section Agenda
        $agendaTitle = Agenda::first();
        $agendaTable = Agenda::orderBy('order')->where('order', '>', 0)->get();
        // Section Topics
        $topic = Topic::orderBy('order')->get();
        // Section Category
        $parti = Participant::orderBy('order')->get();
        $compe = Competition::orderBy('order')->get();
        // Section Awards
        $awards = Awards::all();
        // Section FAQs
        $faqs = FAQ::orderBy('order')->get();
        // Section Fee
        $fee = Fee::orderBy('order')->get();

        return view('layouts.main', compact([
            'app',
            'home',
            'about',
            'agendaTitle',
            'agendaTable',
            'topic',
            'parti',
            'compe',
            'awards',
            'faqs',
            'fee',
            'mtc'
        ]));
    }

    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();
        $app->name = json_decode($app->name, true);
        
        return view('admin.edit_app', compact(['app']));
    }

    public function update(Request $request) {
        $request->validate([
            'app_icon' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'app_name' => 'required|array|size:2',
            'app_name.0' => 'required|string|max:255',
            'app_name.1' => 'required|string|max:255',
            'register' => 'required|string|url',
        ]);

        try {
            $file = $request->file('app_icon');
            $size = 2097152;

            if ($request->hasFile('app_icon')) {
                if ($file->getSize() == $size) {
                    return redirect()->back()->withErrors(['error' => 'Maximum image size is 2MB.'])->withInput();
                }
            }

            if (!filter_var($request->register, FILTER_VALIDATE_URL)) {
                return redirect()->back()->withErrors(['error' => 'URL field must be a valid link.'])->withInput();
            }

            $app = App::first();

            $fname = $request->input('app_name.0');
            $lname = $request->input('app_name.1');
            $app->app_name = [$fname, $lname];
            
            $app->register = $request->input('register');
            $app->is_fname_showed = $request->has('is_fname_showed') ? 1 : 0;
            $app->is_lname_showed = $request->has('is_lname_showed') ? 1 : 0;
            $app->is_image_fit = $request->has('is_image_fit') ? 1 : 0;

            if ($request->hasFile('app_icon')) {
                $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('logo', $filename, 'public');
                $app->app_icon = 'storage/logo/' . $filename;
            }

            $app->save();

            return redirect()->route('main');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
