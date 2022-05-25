<?php

use App\Http\Controllers\Dashboard\StartController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\VerificationController;
use App\Mail\Testmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


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
// | *********************************************************************** |
// Login Page Route Group
// | *********************************************************************** |
Route::namespace('User')->group(function(){
    Route::get('/',[UserController::class,'loginRoute'])->middleware('guest');
    // login & sign up 
    Route::post('user_login',[UserController::class,'user_login'])->name('user_login');
    Route::post('user_registertion',[UserController::class,'user_registertion'])->name('user_registertion');
});


// | *********************************************************************** |
// Dashboard Page Route Group
// | *********************************************************************** |
Route::namespace('Dashboard')->group(function(){
    Route::get('/dashboard',[StartController::class,'start'])->middleware(['auth','verified']);
    Route::get('/logout',[StartController::class,'logout']);
});


// | *********************************************************************** |
// Verification Email Route Group
// | *********************************************************************** |
