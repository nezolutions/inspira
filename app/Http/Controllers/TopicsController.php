<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TopicsController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $topics = Topic::orderBy('order')->get();

        return view('admin.edit_topics', compact(['topics']));
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
            $topicsToInsert = [];
            
            foreach ($request->topics as $index => $topic) {
                $listArray = collect(preg_split("/\r\n|\n|\r/", $topic['list']))
                    ->map(fn($item) => ltrim($item, "- "))
                    ->filter(fn($item) => !empty(trim($item)))
                    ->values()
                    ->all();

                $topicsToInsert[] = [
                    'title' => $topic['title'],
                    'list'  => json_encode($listArray),
                    'order' => $index
                ];
            }
            Topic::insert($topicsToInsert);

            return redirect()->route('main');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
