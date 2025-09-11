<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ParticipantController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $participants = Participant::orderBy('order')->get();

        return view('admin.edit_participant', compact(['participants']));
    }

    public function update(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'participants' => 'required|array|min:1',
            'participants.*.title' => 'required|string|max:255',
            'participants.*.icon' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'participants.*.background' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        try {
            Participant::truncate();
            foreach ($request->participants as $index => $participant) {
                // Cari data lama kalau ada
                $participantModel = Participant::find($participant['id'] ?? null) ?? new Participant();

                $participantModel->title = $participant['title'];
                $participantModel->order = $index;

                // === ICON ===
                if (isset($participant['icon']) && $participant['icon'] instanceof \Illuminate\Http\UploadedFile) {
                    $iconFile = $participant['icon'];
                    $iconName = 'icon_' . time() . '_' . $index . '.' . $iconFile->getClientOriginalExtension();
                    $iconFile->storeAs('participants/icons', $iconName, 'public');
                    $participantModel->icon = 'storage/participants/icons/' . $iconName;
                } else {
                    // pakai icon lama
                    $participantModel->icon = $participant['old_icon'] ?? $participantModel->icon;
                }

                // === BACKGROUND ===
                if (isset($participant['background']) && $participant['background'] instanceof \Illuminate\Http\UploadedFile) {
                    $bgFile = $participant['background'];
                    $bgName = 'bg_' . time() . '_' . $index . '.' . $bgFile->getClientOriginalExtension();
                    $bgFile->storeAs('participants/backgrounds', $bgName, 'public');
                    $participantModel->background = 'storage/participants/backgrounds/' . $bgName;
                } else {
                    // pakai background lama
                    $participantModel->background = $participant['old_background'] ?? $participantModel->background;
                }

                $participantModel->save();
            }

            return redirect()->route('main')->with('success', 'Participants updated successfully.');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()])->withInput();
        }
    }

}
