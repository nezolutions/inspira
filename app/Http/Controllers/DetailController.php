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
}
