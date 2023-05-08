<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ImageController;

Route::get('/', [ImageController::class, 'create'])->name('image.create');
Route::post('/', [ImageController::class, 'store']);

Route::get('/t', [TestController::class, 'test']);
