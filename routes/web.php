<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'saveregister']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index');
        Route::get('home', 'index');
        Route::get('dashboard/booking', 'viewbooking');
        Route::get('dashboard/car', 'viewcar');
        Route::get('dashboard/tipe', 'viewtipe');
    });
});


Route::get('/booking/tambahbooking/{id}', [BookingController::class, 'index']);
Route::post('/booking/tambahbooking', [BookingController::class, 'savebooking']);
Route::get('/booking/daftarbooking', [BookingController::class, 'daftarbooking']);

Route::get('/daftarbooking/edit/{id}', [BookingController::class, 'edit']);
Route::post('/daftarbooking/save', [BookingController::class, 'saveedit']);
Route::delete('daftarbooking/hapus', [BookingController::class, 'delete']);
