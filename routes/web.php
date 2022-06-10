<?php

use Illuminate\Support\Facades\Route;
use App\Traits\ModelTrait;
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
    $slides = ModelTrait::getSlides();
    return view('welcome',compact('slides'));
});

Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix(URI['admin'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index']);
});
