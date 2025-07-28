<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect()->route('main');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        return view('auth.login', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version
        ]));  
    }

    public function auth(Request $request) {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255'
        ]);

        $email = User::where('email', $request->input('email'))->first();
        $remember = $request->has('remember');

        if ($email && password_verify($request->input('password'), $email->password)) {
            Auth::login($email, $remember);

            return redirect()->route('main');
        } else {
            return redirect()->back()->withErrors(['password' => 'Wrong email or password.'])->withInput($request->only('email'));
        }
    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('main');
    }
}
