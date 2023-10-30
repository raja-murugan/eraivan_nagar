<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\FrontendController;
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
Route::get('/', [FrontendController::class, 'welcome'])->name('welcome');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/benefits', [FrontendController::class, 'benefits'])->name('benefits');
Route::get('/amenities', [FrontendController::class, 'amenities'])->name('amenities');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // BOOKING CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking', [BookingController::class, 'index'])->name('booking.index');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/create', [BookingController::class, 'create'])->name('booking.create');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/booking/store', [BookingController::class, 'store'])->name('booking.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/edit/{unique_key}', [BookingController::class, 'edit'])->name('booking.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/update/{unique_key}', [BookingController::class, 'update'])->name('booking.update');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/delete/{unique_key}', [BookingController::class, 'delete'])->name('booking.delete');
        // DATAE FILTER
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/datefilter', [BookingController::class, 'datefilter'])->name('booking.datefilter');
    });

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

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/payment', [PaymentController::class, 'index'])->name('payment.index');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/payment/store', [PaymentController::class, 'store'])->name('payment.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/payment/edit/{unique_key}', [PaymentController::class, 'edit'])->name('payment.edit');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/payment/delete/{unique_key}', [PaymentController::class, 'delete'])->name('payment.delete');
    });
});