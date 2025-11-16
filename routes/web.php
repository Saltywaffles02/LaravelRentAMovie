<?php

use App\Http\Controllers\ProfileController;
use App\http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


// Auth routes
Route::get('/', function () {
    return redirect()->route('login');
});

// User dashboard
Route::get('/dashboard', function () {
    if(auth()->user()->role === 'admin'){
        return redirect()->route('admin.dashboard');
    }

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin dashboard
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Library routes
//Route::get('/library', function () {
//    return view('library');
//})->middleware(['auth'])->name('library');

Route::get ('/library', [MoviesController::class, 'index']) ->name('library');

