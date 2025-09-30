<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function maintenance() {
        $mtc = Maintenance::first();
        
        if (!$mtc->is_active) {
            return redirect()->route('main');
        }
        
        $app = App::first();
        
        return view('pages.maintenance', compact('app'));
    }
}
