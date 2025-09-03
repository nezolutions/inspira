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

        $about = About::first();

        return view('admin.edit_about', compact('about'));
    }

    public function update(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
    
        $validated = $request->validate([
            'content' => 'required|string',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'highlights' => 'nullable|array',
            'highlights.*' => 'nullable|string'
        ]);
    
        try {
            $about = About::firstOrFail();
    
            $about->content = $validated['content'];
    
            $highlights = $validated['highlights'] ?? [];
            $about->highlights = array_replace($about->highlights ?? [], $highlights);
    
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                if ($file->getSize() > 2097152) {
                    return redirect()->back()
                        ->withErrors(['error' => 'Maximum image size is 2MB.'])
                        ->withInput();
                }
    
                $filename = 'cover_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('cover', $filename, 'public');
                $about->logo = 'storage/cover/' . $filename;
            }
    
            $about->save();
    
            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()])->withInput();
        }
    }    
}

