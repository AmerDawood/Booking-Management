<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Space;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $spaces = Space::orderByDesc('id')->where('is_available','1')->get();

        // dd($spaces);
        return view('dashboard.user.index',[

            'spaces' => $spaces
        ]);
    }

    public function privacy ()
    {
        return view('dashboard.user.privacy.index');
    }




}
