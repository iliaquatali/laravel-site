<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DataViewController;




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


Route::get('login',[LoginController::class,'show'])->name('login');
Route::post('login',[LoginController::class,'checklogin'])->name('check.login');

Route::middleware(['is_admin'])->group(function(){
    Route::get('show', [RegisterController::class,'show'])->name('show');
    Route::get('register', [RegisterController::class,'create'])->name('user.create');
    Route::get('logout', [RegisterController::class,'logout'])->name('logout');


});

Route::middleware(['is_user'])->group(function(){
Route::resource('/posts', PostController::class);

});


Route::post('user/store', [RegisterController::class,'store'])->name('user.store'); 

Route::get('teacherlist', [DataViewController::class,'teacherList'])->name('teacher.list'); 
Route::get('studentlist', [DataViewController::class,'studentList'])->name('student.list'); 


