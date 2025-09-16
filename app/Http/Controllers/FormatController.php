<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FormatController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $format = Format::orderBy('order')->where('order', '>', 0)->get();

        return view('admin.edit_format', compact('format'));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'formats' => 'required|array|min:1',
            'formats.*.content' => 'required|string',
        ]);

        try {
            Format::truncate();

            foreach ($request->formats as $index => $format) {
                Format::create([
                    'content' => $format['content'],
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occured: ' . $e->getMessage()])->withInput();
        }
    }
}
