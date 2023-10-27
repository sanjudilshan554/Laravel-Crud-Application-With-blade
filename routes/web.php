<?php

use App\Http\Controllers\SendMailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\userLoginIntController;
use App\Http\Controllers\userRegIntController;
use Illuminate\Support\Facades\Route;




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

// Web api

Route::get('/mail', [SendMailController::class,'indexs']);
Route::post('/mail',[SendMailController::class,'sendmails'])->name('sendMail');
Route::get('/api/updateInterface/{id}',[RegisterController::class,'updateView'])->name('updateInterface');
Route::post('/users/{id}/update',[RegisterController::class,'updateUser']);
Route::post('/api/user/login',[RegisterController::class,'logout'])->name('logout');
Route::GET('/',[userLoginIntController::class,'login'])->name('/');

