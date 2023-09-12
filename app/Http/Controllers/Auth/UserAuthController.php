<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserAuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }




public function userLogin(Request $request){
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('user.dashboard');
    }

    // toastr()->error('Invalid credentials');

    return redirect()->route('user.login.form');

}


public function userRegister(Request $request){

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'type'=>'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('user.register.form')
            ->withErrors($validator)
            ->withInput();
    }

    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        'type' => $request->input('type'),

    ]);

    // toastr()->success('User Registered Successfully');

    return redirect()->route('user.login.form');

}


public function logoutUser()
{
    Auth::logout();
    return redirect()->route('user.login.form');
}
}
