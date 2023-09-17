<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\BookingMade;
use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Booking;
use App\Models\Image;
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

      $booking =  Booking::create($validatedData);

        // event(new BookingMade($booking));

        BookingMade::dispatch($booking);


        return redirect()->route('booking.request')->with('msg', 'Booking Request created successfully');
    }




    public function show(Space $space)
    {
        $space->load('place');
        $space = Space::findOrFail($space->id);


        $amenityIds = json_decode($space->amenities);

        $amenityNames = [];

        if (!is_array($amenityIds)) {
            $amenityIds = [];
        }

        // Initialize an empty array to store amenity names
        $amenityNames = [];

        // Loop through the amenity IDs and retrieve their names
        foreach ($amenityIds as $amenityId) {
            $amenity = Amenity::find($amenityId);
            if ($amenity) {
                $amenityNames[] = $amenity->name;
            } else {
                $amenityNames[] = 'Amenity not found';
            }
        }

        // $album = Image::find(10);
        $album = Image::where('space_id' , $space->id)->get();

        // dd($album);





        // if (!$album) {
        //     // Handle the case where the album is not found, e.g., show an error or redirect
        //     return redirect()->route('booking.request')->with('error', 'Album not found');
        // }



        return view('dashboard.user.booking.details', compact('space','amenityNames','album'));
    }

}
