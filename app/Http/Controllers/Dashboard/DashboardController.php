<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Amenity;
use App\Models\Booking;
use App\Models\Space;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $bookings = Booking::orderByDesc('id')->where('status','pending')->get();


        $usersCount = User::count();
        $spacesCount = Space::count();
        $adminsCount = Admin::count();
        $amenityCount = Amenity::count();




        $myBookingRequest = Booking::where('user_id',auth()->user()->id)->count();
        $myAcceptedBookingRequest = Booking::where('user_id',auth()->user()->id)->where('status','approved')->count();
        $myPendingBookingRequest = Booking::where('user_id',auth()->user()->id)->where('status','pending')->count();




        $myBookings = Booking::orderByDesc('id')->where('status','pending')->where('user_id',auth()->user()->id)->get();


        $lastThreeSpaces = Space::orderByDesc('id')->take(3)->get();




        return view('dashboard.index',[
            'bookings' => $bookings,
            'usersCount' => $usersCount,
            'spacesCount' => $spacesCount,
            'adminsCount' => $adminsCount,
            'amenityCount' => $amenityCount,
            'myBookingRequest' => $myBookingRequest,
            'myAcceptedBookingRequest'=> $myAcceptedBookingRequest,
            'myPendingBookingRequest'=>$myPendingBookingRequest,
            'myBookings' => $myBookings,
            'lastThreeSpaces' => $lastThreeSpaces,
        ]);
    }
}
