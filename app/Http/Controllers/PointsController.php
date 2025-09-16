<?php

namespace App\Http\Controllers;

use App\Models\Points;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PointsController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $point = Points::all();

        return view('admin.edit_points', compact('point'));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'points' => 'required|array|min:1',
            'points.*.content' => 'required|string',
        ]);

        try {
            Points::truncate();

            foreach ($request->points as $index => $point) {
                Points::create([
                    'content' => $point['content'],
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
