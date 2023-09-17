<?php

namespace App\Listeners;

use App\Events\BookingMade;
use App\Models\Admin;
use App\Notifications\NewBooking;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class SendBookingNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle($event)
    {
        \Illuminate\Support\Facades\Log::info('Event received in listener');

        // Get all admin users who should receive the notification
        $admins = Admin::all();


        // Send the notification to each admin user
        foreach ($admins as $admin) {
            $admin->notify(new NewBooking($event->booking));
        }



    }
}
