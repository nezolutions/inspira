<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $home = Home::first();

        $title = $home->title;
        $desc = $home->description;
        $bg = $home->background;

        return view('admin.edit_home', with([
            'title' => $title,
            'desc' => $desc,
            'bg' => $bg
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'background' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $size = 2097152;

        try {
            if ($request->hasFile('background')) {
                $file = $request->file('background');
                if ($file->getSize() == $size) {
                    return redirect()->back()->withErrors(['error' => 'Maximum image size is 2MB.'])->withInput();
                }
            }

            $home = Home::first();

            $home->title = $request->input('title');
            $home->description = $request->input('description');

            if ($request->hasFile('background')) {
                $file = $request->file('background');
                $filename = 'bg_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('background', $filename, 'public');
                $home->background = 'storage/background/' . $filename;
            }
            $home->save();

            return redirect()->route('main');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
