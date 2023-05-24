<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', fn () => view('welcome'))->name('home');
Route::view('/', 'welcome')->name('home');

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::controller(BookController::class)->group(function () {
// 	Route::get('/books', 'index')->name('books.index');
// 	Route::get('/books/create', 'create')->name('books.create');
// 	Route::post('/books', 'store')->name('books.store');
// 	Route::get('/books/edit/{book}', 'edit')->name('books.edit');
// 	Route::put('/books/{book}', 'update')->name('books.update');
// 	Route::delete('/books/{book}', 'destroy')->name('books.destroy');
// });
Route::view('/users', 'users.index')->name('users.index');

Route::resource('books', BookController::class)->except(['show']);

Route::get('/image', [ImageController::class, 'create'])->name('image.create');
Route::post('/image', [ImageController::class, 'store']);

Route::get('/test', [TestController::class, 'test'])->name('test.index');

require_once __DIR__ . '/auth.php';
