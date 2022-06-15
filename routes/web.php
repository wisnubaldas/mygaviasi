<?php

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

Route::get('/', [App\Http\Controllers\LandingController::class,'index']);
Route::prefix(URI['landing'])->group(function(){
    Route::match(['get', 'post'], '/{any?}', [App\Http\Controllers\LandingController::class,'getPages']);
});
Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix(URI['admin'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index']);
});
