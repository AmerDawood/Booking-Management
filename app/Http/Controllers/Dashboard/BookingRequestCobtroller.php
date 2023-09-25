<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingRequestCobtroller extends Controller
{

    public function index()
    {
        $bookings = Booking::orderByDesc('id')->where('status','pending')->paginate(6);
        return view('dashboard.admin.booking_request.index',[
            'bookings' => $bookings,
        ]);
    }

    public function details($id){
        $booking = Booking::find($id);
        return view('dashboard.admin.booking_request.details',compact('booking'));
    }


    public function rejictedBookingRequest()
    {
        $bookings = Booking::orderByDesc('id')->where('status','rejected')->paginate(6);


        return view('dashboard.admin.booking_request.rejicted_booking_request',compact('bookings'));
    }



    // public function updateBookingStatus($id, $status)
    // {
    //     try {
    //         $booking = Booking::findOrFail($id);

    //         if (!in_array($status, ['approved', 'rejected'])) {
    //             return abort(400);
    //         }

    //         $booking->status = $status;
    //         $booking->save();

    //         return redirect()->back()->with('msg', 'Booking status has been updated.');
    //     } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
    //         return abort(404);
    //     }
    // }


public function updateBookingStatus($id, $status)
{
    try {
        $booking = Booking::findOrFail($id);

        if (!in_array($status, ['approved', 'rejected'])) {
            return abort(400);
        }

        $booking->status = $status;
        $booking->save();

        // Check if the status is "approved," and if so, insert an event record
        if ($status === 'approved') {
            $eventData = [
                'title' => $booking->special_requests,
                'start' => $booking->start_date,
                'end' => $booking->end_date,
            ];

            Event::create($eventData);
        }

        return redirect()->back()->with('msg', 'Booking status has been updated.');
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return abort(404);
    }
}
}
