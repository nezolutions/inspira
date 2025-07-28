<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AgendaTable;
use App\Models\AgendaText;
use App\Models\App;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index() {
        // Info Aplikasi
        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $register = $app ? $app->app_link : 'https://docs.google.com/forms/d/e/1FAIpQLScu_P8sgARBq5Apvboqu9yqBMFHLTYgI_jSWtdVrMeVyNSD5w/viewform';
        $app_icon = $app ? $app->app_icon : 'assets/images/logo.png';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        // Section Home
        $home = Home::first();

        $bg = $home ? $home->background : 'assets/images/background.jpg';
        $title = $home ? $home->title : 'International Forum on Innovation, Strategy, and Presentation of Research Activity';
        $desc = $home ? $home->description : 'Bridging engineering, business, and pharmaceutical expertise to advance technological innovation for global impact';

        // Section About
        $about = About::first();

        $logo = $about ? $about->logo : 'assets/images/icon.png';
        $content = $about ? $about->content : 'is a premier academic platform organized by Jakarta Global University (JGU) that brings together emerging researchers, scholars, and innovators to showcase their ideas and insights in the fields of science, technology, business, and health. Under the theme “International Forum on Innovation, Strategy, and Presentation of Research Activity," this event aims to foster interdisciplinary collaboration, spark future-oriented thinking, and strengthen the research culture among the academic community. Through a dynamic combination of strategic forums, keynote lectures, and a competitive poster presentation, JGU INSPIRA serves as a catalyst for knowledge exchange, academic excellence, and impactful innovation aligned with global challenges and sustainable development goals (SDGs).';

        // Section Agenda
        $agendaTb = AgendaTable::all();
        $agendaTs = AgendaText::first();

        $agenda = $agendaTs ? $agendaTs->description : 'The International Competition on Research Posters and Oral Presentations, open to students, early-career researchers, lecturer, and young professionals to present their research findings, innovative ideas, or ongoing development projects in a visual, data-driven format. More than just a competition, this activity provides a platform for constructive academic dialogue, with evaluations by a panel of interdisciplinary experts.';

        return view('layouts.app', with([
            'ac' => $ac,
            'register' => $register,
            'app_name' => $app_name,
            'app_icon' => $app_icon,
            'app_version' => $app_version,

            'bg' => $bg,
            'judul' => $title,
            'deskripsi' => $desc,

            'logo' => $logo,
            'content' => $content,

            'agendaTb' => $agendaTb,
            'agendaTs' => $agenda,
        ]));
    }

    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app->university;
        $app_name = $app->app_name;
        $app_version = $app->app_version;
        $app_link = $app->app_link;
        
        return view('admin.edit_app', [
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,
            'app_link' => $app_link
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'app_name' => 'required|string',
            'university' => 'required|string',
            'app_version' => 'required|integer',
            'app_link' => 'required|string',
            'user_avatar' => 'nullable|file|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $size = 2097152;

        if ($request->hasFile('user_avatar')) {
            $file = $request->file('user_avatar');
            if ($file->getSize() == $size) {
                return redirect()->back()->withErrors(['app_icon' => 'Maximum image size is 2MB.'])->withInput();
            }
        }

        if (!filter_var($request->app_link, FILTER_VALIDATE_URL)) {
            return redirect()->back()->withErrors(['app_link' => 'The URL field must be a valid link.'])->withInput();
        }

        $app = App::first();
        if (!$app) {
            return redirect()->back()->with('error', 'Data aplikasi tidak ditemukan.');
        }

        $app->app_name = $request->app_name;
        $app->university = $request->university;
        $app->app_version = $request->app_version;
        $app->app_link = $request->app_link;

        // Handle upload logo jika ada
        if ($request->hasFile('user_avatar')) {
            $file = $request->file('user_avatar');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->move(public_path('assets/images'), $filename);
            $app->app_icon = 'assets/images/' . $filename;
        }

        $app->save();

        return redirect()->route('main');
    }
}
