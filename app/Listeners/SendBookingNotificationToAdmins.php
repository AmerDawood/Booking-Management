<?php

namespace App\Listeners;

use App\Models\Admin;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\NewBooking;

use Illuminate\Queue\InteractsWithQueue;

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
    public function handle(object $event): void
    {
            // Get all admin users who should receive the notification
            $admins = Admin::all();


            // Send the notification to each admin user
            foreach ($admins as $admin) {
                $admin->notify(new NewBooking($event->booking));
            }

    }
}
