<?php

use App\Events\BookingCreated;
use App\Models\Booking;
use App\Models\Order;
use App\Models\User;
use App\Notifications\NewOrder;
use App\Notifications\TestNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





// Route::get('send-notify', function() {

//     $order = Booking::find(2);

//     event(new BookingCreated($order));

// });

Route::get('send-notify', function() {
    $user = Auth::user();
    $order = Booking::find(2);
    $user->notify(new TestNotification($order));
});




Route::get('read-notify', function() {
    return view('dashboard.read_notify');
});

Route::get('read-notify/{id}', function($id) {
    // Auth::user()->notifications->find($id)->update(['read_at' => now()]);
    Auth::user()->notifications->find($id)->markAsRead();
    // return redirect(Auth::user()->notifications->find($id)->data['url']);
    return redirect()->back();
})->name('readd');

Route::delete('delete-notify/{id}', function($id) {
    Auth::user()->notifications->find($id)->delete();
    return redirect()->back();
})->name('deletee');


Route::get('read-all-notify', function() {
    Auth::user()->unreadnotifications->markAsRead();
    return redirect()->back();
})->name('readall');
