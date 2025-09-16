<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput($request->only('email'));
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

        $user = User::first();

        $un = $user->name;
        $email = $user->email;
        $password = $user->password;

        return view('admin.edit_user', with([
            'name' => $un,
            'email' => $email,
            'password' => $password
        ]));
    }

    public function updateUser(Request $request) {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:4|max:255',
            'confirm_password' => 'nullable|string|same:password'
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'name.required' => 'Name is required.',
            'password.min' => 'Password must be at least 4 characters.',
            'confirm_password.same' => 'Password confirmation does not match the password.'
        ]);

        try {
            $user = User::first();

            if ($request->input('email') != $user->email) {
                $user->email = $request->input('email');
            }

            if ($request->input('name') != $user->name) {
                $user->name = $request->input('name');
            }

            if ($request->filled('password')) {
                $user->password = bcrypt($request->input('password'));
            }

            $user->save();

            return redirect()->route('login');
        } catch (\Exception $e) {
            Log::warning('An error occured: ' . $e->getMessage());
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage())->withInput();
        }
    }
}
