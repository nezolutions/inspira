<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            'cover' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'highlights' => 'nullable|array',
            'highlights.*' => 'nullable|string',
            'venue' => 'required|string'
        ]);
    
        try {
            $about = About::firstOrFail();
    
            $about->content = $validated['content'];
            $about->venue = $validated['venue'];
    
            $highlights = $validated['highlights'] ?? [];
            $about->highlights = array_replace($about->highlights ?? [], $highlights);
    
            if ($request->hasFile('cover')) {
                $file = $request->file('cover');
                if ($file->getSize() > 2097152) {
                    return redirect()->back()
                        ->withErrors(['error' => 'Maximum image size is 2MB.'])
                        ->withInput();
                }
    
                $filename = 'cover_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('cover', $filename, 'public');
                $about->cover = 'storage/cover/' . $filename;
            }
    
            $about->save();
    
            return redirect()->route('main');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()])->withInput();
        }
    }    
}

