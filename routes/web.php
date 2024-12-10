<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DeveloperController;
use App\Models\Developer;

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



// Developers Section
Route::resource('developers', DeveloperController::class)->middleware('auth');

Route::get('/developers', [DeveloperController::class, 'index'])->name('developers.index');
// this one retrieves the create form
Route::get('/developers/create', [DeveloperController::class, 'create'])->name('developers.create');
// POST request sends data. We don't directly go to this ourselves, the form makes its POST request to it, sending form data
Route::post('/developers', [DeveloperController::class, 'store'])->name('developers.store');
// Sends us to the edit function in DeveloperController, which returns the edit form (edit.blade.php)
Route::get('/developers/{developer}/edit', [DeveloperController::class, 'edit'])->name('developers.edit');
// The form itself will make a call to this, passing whatever we input
Route::patch('/developers/{developer}', [DeveloperController::class, 'update'])->name('developers.update');
Route::get('/developers/{developer}', [DeveloperController::class, 'show'])->name('developers.show');
Route::delete('/developers/{developer}', [DeveloperController::class, 'destroy'])->name('developers.destroy');

require __DIR__.'/auth.php';


