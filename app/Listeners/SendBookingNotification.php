<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use App\Models\Admin;
use App\Notifications\TestNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
    public function handle(BookingCreated $event)
    {
        $booking = $event->booking;
        $admins = Admin::all();

        // Notify all admin users, regardless of their role
        foreach ($admins as $admin) {
            $admin->notify(new TestNotification($booking));
        }
    }

}
