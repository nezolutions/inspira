<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Agenda;
use App\Models\App;
use App\Models\Awards;
use App\Models\Competition;
use App\Models\Fee;
use App\Models\Home;
use App\Models\Participant;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index() {
        // Apps Info
        $app = App::first();
        // Section Home
        $home = Home::first();
        // Section About
        $about = About::first();
        // Section Agenda
        $agendaTitle = Agenda::first();
        $agendaTable = Agenda::orderBy('order')->get();
        // Section Topics
        $topic = Topic::orderBy('order')->get();
        // Section Category
        $parti = Participant::orderBy('order')->get();
        $compe = Competition::orderBy('order')->get();
        // Section Awards
        $awards = Awards::all();
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
            'fee',
            'awards'
        ]));
    }

    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();
        
        return view('admin.edit_app', compact(['app']));
    }

    public function update(Request $request) {
        $request->validate([
            'app_icon' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'app_name' => 'required|string|max:255',
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

            $app_name_string = $request->input('app_name');
            $app_name_array = array_map('trim', explode(',', $app_name_string));
            $app->app_name = $app_name_array;

            $app->register = $request->input('register');
            $app->is_name_showed = $request->has('is_name_showed') ? 1 : 0;
            $app->is_image_fit = $request->has('is_image_fit') ? 1 : 0;

            if ($request->hasFile('app_icon')) {
                $filename = 'icon_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('icon', $filename, 'public');
                $app->app_icon = 'storage/icon/' . $filename;
            }

            $app->save();

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
