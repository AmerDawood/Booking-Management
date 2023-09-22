<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function getEvent()
{

    // $event = Booking::all();

    // return response()->json([
    //     'data' => $event
    // ]);

    if (request()->ajax()) {
        $start = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
        $end = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');
        $events = Booking::whereDate('start_date', '>=', $start)->whereDate('end_date', '<=', $end)
            ->get(['id', 'special_requests', 'start', 'end']);

        // Use dd to inspect the $events variable
        dd($events->toArray());

        return response()->json(['data' => $events]);
    }



    return view('dashboard.admin.calender.index');
}

}
