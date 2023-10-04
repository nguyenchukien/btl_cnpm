<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SachController;
use App\Http\Controllers\BandocController;

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

Route::get('/', [HomeController::class,'login'])->name('login');        //hiển thị giao diện
Route::post('login', [HomeController::class,'authLogin'])->name('auth.login');      //sử lý dữ liệu khi nhấn submit trong login


Route::middleware("auth")->prefix("admins")->group(function () {
    Route::resource('sachs',SachController::class);

    Route::resource('bandocs', BandocController::class);
});
