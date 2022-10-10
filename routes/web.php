<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\DashboardController;
use App\Http\Controllers\auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index',[LoginController::class,'show'])->name('index');

Route::get('login',[LoginController::class,'show'])->name('login');
Route::post('login',[LoginController::class,'checklogin'])->name('check.login');
Route::get('dashboard',[DashboardController::class,'dash'])->name('dashboard');



Route::get('register', [RegisterController::class,'create'])->name('user.create');
Route::post('user/store', [RegisterController::class,'store'])->name('user.store'); 
Route::get('show', [RegisterController::class,'show'])->name('show');
