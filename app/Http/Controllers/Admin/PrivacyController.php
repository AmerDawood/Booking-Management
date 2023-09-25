<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::latest()->first();

        return view('dashboard.admin.privacy.privacy',compact('privacy'));
    }


    public function updateData(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        Privacy::create([
            'description' => $request->description,
            'title' => $request->title,
        ]);


        return redirect()->route('dashboard.index')->with('msg', 'Privacy Updated Successfully')->with('type', 'success');
    }
}
