<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [IndexController::class, 'welcome'])->name('index.index');
Route::get('/index',  [IndexController::class, 'index'])->name('index.index');
Route::get('/home',  [IndexController::class, 'index'])->name('index.index');
Route::get('/about',  [IndexController::class, 'about'])->name('index.about');
Route::get('/services',  [IndexController::class, 'services'])->name('index.services');

Route::get('/dashboard', static function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
