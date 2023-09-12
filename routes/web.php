<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PlaceController;
use App\Http\Controllers\Dashboard\SpacesController;
use App\Http\Controllers\Website\WebsiteController;

use Illuminate\Support\Facades\Route;

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






// Route::middleware('auth')->group(function(){


    // Route::middleware('admin')->group(function(){

        Route::get('/dashboard' , [DashboardController::class,'index'])->name('dashboard.index');

        Route::resource('spaces' , SpacesController::class);
        Route::resource('places' , PlaceController::class);


    // });

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
