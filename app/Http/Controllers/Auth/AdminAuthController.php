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



    // public function register(Request $request){


    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:admins',
    //         'password' => 'required|min:6|confirmed',
    //     ]);

    //     if ($validator->fails()) {

    //         return redirect()->route('admin.register.form')
    //         ->withErrors($validator)
    //         ->withInput();
    //     }

    //     $admin = Admin::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => bcrypt($request->input('password')),
    //     ]);


    //     // toastr()->success('Admin Created Successfuly');

    //     return redirect()->route('admin.login.form');

    // }






    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login.form');
    }
}
