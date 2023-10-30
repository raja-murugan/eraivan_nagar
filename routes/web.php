<?php

<<<<<<< HEAD
use App\Http\Controllers\BookingController;
=======
use App\Http\Controllers\PlotController;
use App\Http\Controllers\ReferenceController;
>>>>>>> 5b0a022d801d78dae528ca3442ba47a3bc7d8640
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

<<<<<<< HEAD



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
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/plot', [PlotController::class, 'index'])->name('plot.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/plot/store', [PlotController::class, 'store'])->name('plot.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/plot/edit/{unique_key}', [PlotController::class, 'edit'])->name('plot.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/plot/delete/{unique_key}', [PlotController::class, 'delete'])->name('plot.delete');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/reference', [ReferenceController::class, 'index'])->name('reference.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/reference/store', [ReferenceController::class, 'store'])->name('reference.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/reference/edit/{unique_key}', [ReferenceController::class, 'edit'])->name('reference.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/reference/delete/{unique_key}', [ReferenceController::class, 'delete'])->name('reference.delete');
});
>>>>>>> 5b0a022d801d78dae528ca3442ba47a3bc7d8640
