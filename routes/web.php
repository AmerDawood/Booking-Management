<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Dashboard\AmenitiesController;
use App\Http\Controllers\Dashboard\BookingController;
use App\Http\Controllers\Dashboard\BookingRequestCobtroller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PlaceController;
use App\Http\Controllers\Dashboard\SpacesController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Website\WebsiteController;
use App\Models\Booking;
use App\Notifications\TestNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::prefix(LaravelLocalization::setLocale())->group(function() {


Route::middleware(['auth.user_or_admin'])->group(function(){
    // Route::middleware('admin')->group(function(){
        Route::get('/dashboard' , [DashboardController::class,'index'])->name('dashboard.index');



    });



    Route::middleware('admin')->group(function(){

        Route::resource('spaces' , SpacesController::class);
        Route::resource('places' , PlaceController::class);
        Route::resource('amenities' , AmenitiesController::class);

        Route::get('users',[AdminController::class,'users'])->name('users.all');
        Route::get('admins',[AdminController::class,'admins'])->name('admins.all');


        Route::post('/user/change-status/{user}', [AdminController::class ,'changeStatus'])->name('user.change-status');
        Route::get('create/user', [AdminController::class ,'create'])->name('create.user');

        Route::post('/users', [AdminController::class,'store'])->name('users.store');

        Route::get('/all-booking-request',[BookingRequestCobtroller::class,'index'])->name('requests.index');
        Route::get('/booking-request/details/{id}',[BookingRequestCobtroller::class,'details'])->name('admin.requests.details');
        Route::put('/bookings/{id}/update-status/{status}', [BookingRequestCobtroller::class,'updateBookingStatus'])->name('bookings.updateStatus');


        // Route::get('/booking-request',[BookingRequestCobtroller::class,'index'])->name('requests.index');

        Route::get('/search', [AdminController::class,'search'])->name('search');



        Route::get('/admin/notification', function () {
            return view('dashboard.test-notify');
        });


    });



    Route::middleware('auth')->group(function(){




        Route::get('available/spaces', [UserController::class ,'index'])->name('available.spaces');

        Route::get('booking-request', [BookingController::class ,'index'])->name('booking.request');
        Route::post('booking-request', [BookingController::class ,'store'])->name('booking.store');

        Route::get('make-booking', [BookingController::class ,'create'])->name('make.book');



        Route::get('space/details/{space}',[BookingController::class,'show'])->name('user.space.details');


        Route::get('privacy',[UserController::class,'privacy'])->name('privacy');



    });

// });


Route::get('/',[WebsiteController::class,'index'])->name('website');


// Auth User


Route::get('user/login',[UserAuthController::class,'showLoginForm'])->name('login.user');
Route::post('user/login',[UserAuthController::class,'login'])->name('login.user');
Route::get('user/register',[UserAuthController::class,'showRegistrationForm'])->name('register.user');
Route::post('user/register',[UserAuthController::class,'register'])->name('register.user');
Route::post('user/logout',[UserAuthController::class,'logout'])->name('logout.user');





// Auth Admin



Route::get('admin/login',[AdminAuthController::class,'showLoginForm'])->name('login.admin');
Route::post('admin/login',[AdminAuthController::class,'login'])->name('login.admin');
Route::post('admin/logout',[AdminAuthController::class,'logout'])->name('logout.admin');



Route::get('/send-email', [UserController::class, 'sendEmail']);



Route::get('/test-chart',function(){
    return view('test_chart');
});





include 'test.php';

});
