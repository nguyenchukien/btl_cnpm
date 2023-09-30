<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SachController;
use App\Http\Controllers\KhachController;
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
Route::resource('/sachs', SachController::class);
Route::resource('/khachs', KhachController::class);
