<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Livewire\Bookings\Thankyou;
use App\Livewire\Checkout;
use App\Livewire\Dashboard\Rooms;
use App\Livewire\Dashboard\RoomTypes;
use App\Livewire\Rooms\Index as RoomsIndex;
use App\Livewire\Rooms\Availability as RoomsAvailability;
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

Route::get('/book/{room:slug}', Checkout::class)->name('book.room')->middleware('auth');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('auth');
Route::post('/checkout/{order}', [CheckoutController::class, 'show'])->name('checkout.show');
Route::get('/post-checkout', [CheckoutController::class, 'edit'])->name('checkout.edit')->middleware('auth');
Route::get('/bookings/success', Thankyou::class)->name('bookings.success')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function(){
    return redirect()->route('home');
});

Route::middleware(['guest'])->get('/login', function(){
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['guest'])->get('/register', function(){
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::prefix('/rooms')->name('rooms.')->group(function(){
    Route::get('/', RoomsIndex::class)->name('index');
    Route::get('/{room:slug}', RoomsAvailability::class)->name('availability');
});
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::middleware(['admin'])->group(function(){
        Route::get('/guests', [GuestController::class, 'index'])->name('guests');
        Route::get('/room-types', RoomTypes::class)->name('roomtypes');
        Route::group(['prefix' => 'rooms'], function(){
            Route::get('/', Rooms::class)->name('rooms');
        });
    });
})->middleware(['auth']);
