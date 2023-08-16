<?php

use App\Http\Controllers\Main\Admin\DashboardController;
use App\Http\Controllers\Main\Students\StudentRaterFormController;
use App\Http\Controllers\ProfileController;
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
    // Route::get('/peer-rater-form', [PeerRaterController::class, 'index'])->name('peer-rater-form');
    Route::get('/student-rater-form', [StudentRaterFormController::class, 'index'])->name('student-rater-form');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


require __DIR__ . '/auth.php';
