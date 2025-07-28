<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect()->route('main');
        }
        return view('auth.login');  
    }

    public function auth(Request $request) {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $email = User::where('email', $request->input('email'))->first();
        $remember = $request->has('remember');

        if ($email && password_verify($request->input('password'), $email->password)) {
            Auth::login($email, $remember);
            return redirect()->route('main');
        } else {
            return redirect()->route('login')->withErrors([
                'password' => 'Wrong email or password.',
            ])->withInput($request->only('email'));
        }
    }

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('main');
    }
}
