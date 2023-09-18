<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingRequestCobtroller extends Controller
{

    public function index()
    {
        $booking = Booking::orederByDesc('id')->paginate(6);
        dd($booking);
        return view('dashboard.admin.booking_request.index');
    }
}
