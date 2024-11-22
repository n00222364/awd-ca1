<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ReviewController;



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


Route::get('/games', [GameController::class, 'index'])->name('games.index');
// this one retrieves the create form
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
// POST request sends data. We don't directly go to this ourselves, the form makes its POST request to it, sending form data
Route::post('/games', [GameController::class, 'store'])->name('games.store');
// Sends us to the edit function in GameController, which returns the edit form (edit.blade.php)
Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
// The form itself will make a call to this, passing whatever we input
Route::patch('/games/{game}', [GameController::class, 'update'])->name('games.update');
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');


// Creates routes for reviews
Route::resource('reviews', ReviewController::class);

Route::post('games/{game}/reviews', [ReviewController::class, 'store'])->name('reviews.store');


require __DIR__.'/auth.php';

