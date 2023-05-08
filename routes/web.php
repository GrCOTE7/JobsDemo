<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImageController::class, 'create'])->name('image.create');
Route::post('/', [ImageController::class, 'store']);
