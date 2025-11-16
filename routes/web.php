<?php

use App\Http\Controllers\ProfileController;
use App\http\Controllers\MoviesController;
use App\http\Controllers\AdminController;
use App\http\Controllers\UserdashboardController;
use Illuminate\Support\Facades\Route;


// Auth routes
Route::get('/', function () {
    return redirect()->route('login');
});

// User dashboard
Route::get('/dashboard', [UserDashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Admin dashboard
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Movie CRUD
    Route::get('/movies/create', [AdminController::class, 'moviesCreate'])->name('admin.movies.create');
    Route::post('/movies/store', [AdminController::class, 'moviesStore'])->name('admin.movies.store');
    Route::get('/movies/{movie}/edit', [AdminController::class, 'moviesEdit'])->name('admin.movies.edit');
    Route::put('/movies/{movie}', [AdminController::class, 'moviesUpdate'])->name('admin.movies.update');
    Route::delete('/movies/{movie}', [AdminController::class, 'moviesDelete'])->name('admin.movies.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Library routes
Route::resource('library', MoviesController::class);

Route::post('/library/{movie}/rent', [MoviesController::class, 'rent'])
    ->middleware('auth')
    ->name('library.rent');



