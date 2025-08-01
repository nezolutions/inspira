<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        $topics = Topic::orderBy('order')->get();

        return view('admin.edit_topics', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,
            'topics' => $topics
        ]));
    }

    public function update(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $request->validate([
            'topics' => 'required|array|min:1',
            'topics.*.title' => 'required|string|max:255',
            'topics.*.list' => 'required|string',
        ]);
        
        try {
            Topic::truncate();

            foreach ($request->topics as $index => $topic) {
                Topic::create([
                    'title' => $topic['title'],
                    'list' => $topic['list'],
                    'order' => $index
                ]);
            }

            return redirect()->route('main');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
