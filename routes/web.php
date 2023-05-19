<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/image', [ImageController::class, 'create'])->name('image.create');
Route::post('/image', [ImageController::class, 'store']);

Route::get('/test', [TestController::class, 'test'])->name('image.test');

require_once __DIR__ . '/auth.php';
