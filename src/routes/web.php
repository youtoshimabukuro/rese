<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\ReservationMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [ReservationController::class,'index']);
    Route::get('/mypage', [ReservationController::class, 'myPage']);
    Route::post('/reservation/search', [ReservationController::class, 'search']);
    Route::post('/shopDetail', [ReservationController::class, 'shopDetail']);
    Route::post('/favorite', [ReservationController::class, 'favorite']);
    Route::post('/reservation/confirm', [ReservationController::class, 'confirm']);
    Route::post('/reserve', [ReservationController::class, 'reserve']);
});