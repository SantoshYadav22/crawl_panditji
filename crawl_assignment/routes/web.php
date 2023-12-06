<?php

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\Register\UserController::class,'index'])->name('index');
Route::post('/register', [App\Http\Controllers\Register\UserController::class,'Register'])->name('register');
Route::post('/login_vali', [App\Http\Controllers\Register\UserController::class,'login'])->name('login_vali');
Route::get('/login', [App\Http\Controllers\Register\UserController::class,'login_page'])->name('login');
Route::post('/reset', [App\Http\Controllers\Register\UserController::class,'reset'])->name('reset');

Route::group(['middleware' =>['auth','web']],function(){
    Route::get('/welcome', [App\Http\Controllers\Register\UserController::class,'welcome'])->name('welcome');

});