<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AdminAuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.admin.login');
    }


    // public function showRegisterForm()
    // {
    //     return view('auth.admin.register');
    // }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();

            // if ($user->type === 'admin') {
                return redirect()->route('dashboard.index')->with('success', 'Logged In Successfully as Admin');
            // } else {
                // return redirect()->route('dashboard.index')->with('success', 'Logged In Successfully');
            // }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }






  





    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('website');
    }
}
