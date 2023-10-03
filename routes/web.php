<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SachController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('login');
});

// Route::middleware(['auth.login'])->group(function(){
//     Route::resource('sachs', SachController::class);
// });
Route::resource('sachs', SachController::class);
Route::get('login', [DashboardController::class, 'login'])->name('login');
Route::post('login', [DashboardController::class, 'authLogin'])->name('authLogin');
Route::resource('register', UserController::class);
Route::resource('khachs', KhachController::class);