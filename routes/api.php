<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

use App\Http\Controllers\Api\User\IndexController;
use App\Http\Controllers\Api\User\ShowController;
use App\Http\Controllers\Api\User\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

// route = user.index

Route::prefix('users')
	->as('users.')
	->group(function () {
		Route::get('/', IndexController::class)->name('index');
		Route::get('/{user}', ShowController::class)->name('show');
		Route::post('/', StoreController::class)->name('store');
	});
