<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        $fee = Fee::orderBy('order')->get();

        return view('admin.edit_fee', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,

            'fee' => $fee
        ]));
    }

    public function update(Request $request) {
        $request->validate([
            'fee' => 'required|array|min:1',
            'fee.*.title' => 'required|string|max:255',
            'fee.*.online_fee' => 'required|integer',
            'fee.*.on_fee_type' => 'required|string',
            'fee.*.offline_fee' => 'required|integer',
            'fee.*.off_fee_type' => 'required|string',
        ]);
        
        try {
            Fee::truncate();

            foreach ($request->fee as $index => $fees) {
                Fee::create([
                    'title' => $fees['title'],
                    'online_fee' => $fees['online_fee'],
                    'on_fee_type' => $fees['on_fee_type'],
                    'offline_fee' => $fees['offline_fee'],
                    'off_fee_type' => $fees['off_fee_type'],
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
