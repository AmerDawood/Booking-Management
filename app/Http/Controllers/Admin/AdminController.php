<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function users(){

        $users = User::orderByDesc('id')->get();
        return view('dashboard.admin.users.users',compact('users'));
      }



      public function admins(){
        $admins = Admin::orderByDesc('id')->get();

        return view('dashboard.admin.admins.admins',compact('admins'));
      }
}
