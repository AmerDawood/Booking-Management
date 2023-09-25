<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\EmailFromAdmin;
use App\Models\Privacy;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $privacy = Privacy::latest()->first();
        return view('dashboard.user.privacy.index',compact('privacy'));
    }


    public function sendEmail()
    {
        $email = 'amermaher684@gmail.com'; // Replace with the recipient's email address
        Mail::to($email)->send(new EmailFromAdmin());

        return "Email sent successfully!";
    }




}
