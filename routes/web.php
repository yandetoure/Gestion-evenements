<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

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
    });


require __DIR__.'/auth.php';
