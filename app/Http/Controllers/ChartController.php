<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getChartData()
    {
        $pendingBookos = Booking::where('status', 'pending')->count();
        $approvedBookos = Booking::where('status', 'approved')->count();
        $rejectedBooks = Booking::where('status', 'rejected')->count();






        // You can also retrieve other data as needed from the users table

        return response()->json([
            'labels' => ['Pending', 'Approved','Rejicted'],
            'values' => [$pendingBookos, $approvedBookos,$rejectedBooks],
        ]);
    }


    public function getDonutChartData()
{
    // Replace this with your actual data retrieval logic
    $activeUsersCount = User::where('status', 'active')->count();
    $inactiveUsersCount = User::where('status', 'inactive')->count();

    return response()->json([
        'labels' => ['Active', 'Inactive'],
        'values' => [$activeUsersCount, $inactiveUsersCount],
    ]);
}
}
