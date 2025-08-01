<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\User;
use Exception;
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
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'password.required' => 'Password is required.',
        ]);

        try {
            $email = User::where('email', $request->input('email'))->first();
            $remember = $request->has('remember');
    
            if ($email && password_verify($request->input('password'), $email->password)) {
                Auth::login($email, $remember);
    
                return redirect()->route('main');
            } else {
                return redirect()->back()->withErrors(['error' => 'Wrong email or password.'])->withInput($request->only('email'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred.'])->withInput($request->only('email'));
        }

    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('main');
    }

    public function edit() {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $app = App::first();

        $ac = $app ? $app->university : 'JGU';
        $app_name = $app ? $app->app_name : 'INSPIRA';
        $app_version = $app ? $app->app_version : now();

        $user = User::first();

        $un = $user->name;
        $email = $user->email;
        $password = $user->password;

        return view('admin.edit_user', with([
            'ac' => $ac,
            'app_name' => $app_name,
            'app_version' => $app_version,

            'name' => $un,
            'email' => $email,
            'password' => $password
        ]));
    }

    public function updateUser(Request $request) {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:4|max:255',
            'confirm_password' => 'required|string|same:password'
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 4 characters.',
            'confirm_password.required' => 'Password confirmation is required.',
            'confirm_password.same' => 'Password confirmation does not match the password.'
        ]);

        try {
            $user = User::first();
            
            if (!$user) {
                return redirect()->back()->withErrors(['error' => 'User not found.'])->withInput();
            }

            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            return redirect()->route('login');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred.'])->withInput();
        }
    }
}
