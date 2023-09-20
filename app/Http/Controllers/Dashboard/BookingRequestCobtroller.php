<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingRequestCobtroller extends Controller
{

    public function index()
    {
        $bookings = Booking::orderByDesc('id')->paginate(6);
        return view('dashboard.admin.booking_request.index',[
            'bookings' => $bookings,
        ]);
    }


    public function details($id){
        $booking = Booking::find($id);
        return view('dashboard.admin.booking_request.details',compact('booking'));
    }



    public function updateBookingStatus($id, $status)
    {
        try {
            $booking = Booking::findOrFail($id);

            if (!in_array($status, ['approved', 'rejected'])) {
                return abort(400);
            }

            $booking->status = $status;
            $booking->save();

            return redirect()->back()->with('msg', 'Booking status has been updated.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return abort(404);
        }
    }
}
