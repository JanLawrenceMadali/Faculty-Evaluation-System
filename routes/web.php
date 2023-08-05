<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Form\StudentRater;
// Form
use App\Http\Livewire\Form\PeerRater;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Form Page
    Route::get('/peer-rater-form', PeerRater::class)->name('peer-rater-form');
    Route::get('/student-rater-form', StudentRater::class)->name('student-rater-form');
});


require __DIR__ . '/auth.php';
