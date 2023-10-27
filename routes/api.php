<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userRegIntController;
use App\Http\Controllers\userLoginIntController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashboard;
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

// apis 
Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::post('/login',[RegisterController::class,'login'])->name('login');
Route::get('/all/dashboard',[RegisterController::class,'getAllData'])->name('dashboard');
Route::post('/deleteUser/{id}',[RegisterController::class,'deleteUser'])->name('deleteUser');
Route::GET('/user/register',[userRegIntController::class,'register'])->name('signup');

Route::GET('/dashboard',[dashboard::class,'showDashBoard']);