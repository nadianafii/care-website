<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/product/index', function () {
    return view('product.index');
})->name('product.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Route::get('/', [PhotoController::class, 'create'])->name('photo.create');
// Route::post('/photos', [PhotoController::class, 'store'])->name('photo.store');
// Route::post('/photos', [PhotoController::class, 'store'])->name('photo.store');
Route::get('/photos/create', [PhotoController::class, 'create'])->name('photo.create');
Route::post('/photos/store', [PhotoController::class, 'store'])->name('photo.store');
Route::post('/photos', [PhotoController::class, 'store'])->name('photo.store');
Route::post('/upload-photo', [PhotoController::class, 'upload'])->name('photo.upload');







});

require __DIR__.'/auth.php';
