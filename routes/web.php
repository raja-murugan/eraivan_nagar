<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




    // BOOKING CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktechnology/booking', [BookingController::class, 'index'])->name('booking.index');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktechnology/booking/create', [BookingController::class, 'create'])->name('booking.create');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktechnology/booking/store', [BookingController::class, 'store'])->name('booking.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktechnology/booking/edit/{unique_key}', [BookingController::class, 'edit'])->name('booking.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktechnology/booking/update/{unique_key}', [BookingController::class, 'update'])->name('booking.update');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktechnology/booking/delete/{unique_key}', [BookingController::class, 'delete'])->name('booking.delete');
        // DATAE FILTER
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktechnology/booking/datefilter', [BookingController::class, 'datefilter'])->name('booking.datefilter');
    });
});