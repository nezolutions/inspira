<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class FAQsController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $faq = FAQ::orderBy('order')->get();

        return view('admin.edit_faqs', compact('faq'));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $request->validate([
            'faqs' => 'required|array|min:1',
            'faqs.*.q' => 'required|string|max:255',
            'faqs.*.a' => 'required|string|max:1024',
        ]);
        
        try {
            FAQ::truncate();

            foreach ($request->faqs as $index => $faq) {
                FAQ::create([
                    'q' => $faq['q'],
                    'a' => $faq['a'],
                    'order' => $index + 1
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
