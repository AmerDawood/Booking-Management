<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserAuthController extends Controller
{


    // LOGIN
    public function showLoginForm()
    {
        return view('auth.user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // if ($user->type === 'admin') {
                return redirect()->route('dashboard.index')->with('success', 'Logged In Successfully as Admin');
            // } else {
                // return redirect()->route('dashboard.index')->with('success', 'Logged In Successfully');
            // }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }



    // Register


    public function showRegistrationForm()
    {
        return view('auth.user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login.user')->with('success', 'Registration successful! You can now log in.');
    }


    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('website')->with('success', 'You have been logged out.');
    }
}
