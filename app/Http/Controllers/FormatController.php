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

        $docs = Format::first();
        $format = Format::orderBy('order')->where('order', '>', 0)->get();

        return view('admin.edit_format', compact([
            'format',
            'docs'
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'docs' => 'nullable|file|mimes:doc,docx,pdf|max:4096',
            'formats' => 'required|array|min:1',
            'formats.*.content' => 'required|string',
        ]);

        try {
            // Update dokumen jika ada file diupload
            if ($request->hasFile('docs')) {
                $file = $request->file('docs');
                $filename = 'inspira_guidebook_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('docs', $filename, 'public');
                // Update atau create dokumen (order=0)
                Format::updateOrCreate(
                    ['order' => 0],
                    ['document' => 'storage/docs/' . $filename]
                );
            }

            // Hapus data format dengan order > 0
            Format::where('order', '>', 0)->delete();

            // Simpan ulang formats (order > 0)
            foreach ($request->formats as $index => $format) {
                Format::create([
                    'content' => $format['content'],
                    'order' => $index + 1
                ]);
            }

            return redirect()->route('oral');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()])->withInput();
        }
    }
}
