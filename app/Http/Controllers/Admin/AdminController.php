<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function users(){
        return view('dashboard.admin.users.users');
      }



      public function admins(){
        return view('dashboard.admin.admins.admins');
      }
}
