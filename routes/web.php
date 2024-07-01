<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('events')->name('events.')->group(function (){
    Route::get('/', [EvenementController::class, 'index'])->name('index');
    Route::get('/create', [EvenementController::class, 'create'])->name('create');
    Route::post('/', [EvenementController::class,'store'])->name('store');
    Route::get('/{event}', [EvenementController::class, 'show'])->name('show');
    Route::get('/{event}/edit', [EvenementController::class, 'edit'])->name('edit');
    Route::put('/{event}', [EvenementController::class, 'update'])->name('update');
    Route::delete('/{event}', [EvenementController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/details', [EvenementController::class, 'details'])->name('details');
    });
    Route::prefix('reservation')->name('reservations.')->group(function (){
        Route::post('/', [ReservationController::class,'store'])->name('store');
        Route::get('/{event}', [ReservationController::class, 'show'])->name('show');
        Route::get('/{event}/edit', [ReservationController::class, 'edit'])->name('edit');
        Route::put('/{event}', [ReservationController::class, 'update'])->name('update');
        Route::delete('/{event}', [ReservationController::class, 'destroy'])->name('destroy');
        Route::get('/{id}/details', [ReservationController::class, 'details'])->name('details');
        });


        Route::get('evenement/{evenement}/reserver', [ReservationController::class, 'create'])->name('reservations.create');
        Route::post('evenement/{evenement}/reserver', [ReservationController::class, 'store'])->name('reservations.store');
        
require __DIR__.'/auth.php';
