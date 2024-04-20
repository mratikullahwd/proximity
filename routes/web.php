<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AplicationController;

Route::get('/', [AplicationController::class, 'index'])->name('index');
Route::post('/store', [AplicationController::class, 'store'])->name('store');

Route::get('/dashboard',[DashboardController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/{id}/view',[DashboardController::class, "view"])->middleware(['auth', 'verified'])->name('view');
Route::get('/dashboard/{id}/approve',[DashboardController::class, "approve"])->middleware(['auth', 'verified'])->name('approve');
Route::get('/dashboard/{id}/inactive',[DashboardController::class, "inactive"])->middleware(['auth', 'verified'])->name('inactive');
Route::get('/dashboard/{id}/delete',[DashboardController::class, "delete"])->middleware(['auth', 'verified'])->name('delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
