<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $detail = Detail::all();

        return view('admin.edit_detail', compact('detail'));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'details' => 'required|array|min:1',
            'details.*.section' => 'required|string|max:255',
            'details.*.content' => 'required|string',
        ]);

        try {
            // Hapus semua data lama
            \App\Models\Detail::truncate();

            // Simpan ulang details
            foreach ($request->details as $index => $detail) {
                \App\Models\Detail::create([
                    'section' => $detail['section'],
                    'content' => $detail['content'],
                    'order' => $index
                ]);
            }

            return redirect()->route('oral')->with('success', 'Detail berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()])->withInput();
        }
    }
}
