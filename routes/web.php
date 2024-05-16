<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/booking/tambahbooking/{id}', [BookingController::class, 'index']);
Route::post('/booking/tambahbooking', [BookingController::class, 'savebooking']);
Route::get('/booking/daftarbooking', [BookingController::class, 'daftarbooking']);
