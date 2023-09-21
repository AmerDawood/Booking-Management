<?php

namespace App\Listeners;

use App\Events\BookingMade;
use App\Models\Admin;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\NewBooking;
use App\Notifications\TestNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendBookingNotificationToAdmins
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
    public function handle(BookingMade $event): void
    {
            // Get all admin users who should receive the notification
            $admins = Admin::all();


            // Send the notification to each admin user
            // foreach ($admins as $admin) {
            //     $admin->notify(new NewBooking($event->booking));
            // }


            Notification::send($admins,new TestNotification($event->booking));


    }
}
