<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Space;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {


        $bookings = Booking::where('user_id' , auth()->user()->id)->orderByDesc('id')->get();

        return view('dashboard.user.booking.index',[
            'bookings' => $bookings,
        ]);

    }

    public function create()
    {

        return view('dashboard.user.booking.create');


    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'space_id' => 'required|exists:spaces,id',
            'user_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'guest_count' => 'required|integer|min:1',
            'contact_phone' => 'required|string',
            'special_requests' => 'nullable|string',
            // 'status' => 'required|in:pending,approved,rejected',
        ]);

        Booking::create($validatedData);

        return redirect()->route('booking.request')->with('msg', 'Booking Request created successfully');
    }




    public function show($id)
    {
        $space = Space::findOrFail($id);



        return view('dashboard.user.booking.details', compact('space'));
    }

}
