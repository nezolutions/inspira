<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();
        
        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        $about = About::first();

        $logo = $about->logo;
        $content = $about->content;

        return view('admin.edit_about', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,

            'logos' => $logo,
            'contents' => $content
        ]));
    }

    public function update(Request $request) {
        $request->validate([
            'content' => 'required|string',
            'background' => 'nullable|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $size = 2097152;

        try {
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                if ($file->getSize() == $size) {
                    return redirect()->back()->withErrors(['error' => 'Maximum image size is 2MB.'])->withInput();
                }
            }

            $about = About::first();

            $about->content = $request->input('content');

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = 'cover_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('cover', $filename, 'public');
                $about->logo = 'storage/cover/' . $filename;
            }
            $about->save();

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
