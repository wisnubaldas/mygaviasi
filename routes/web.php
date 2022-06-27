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
Route::get('/mail',function ()
{
    return view('admin.mail-broker');
});

Route::prefix(URI['landing'])->group(function(){
    Route::match(['get', 'post'], '/{any?}', [App\Http\Controllers\LandingController::class,'getPages']);
});
Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix(URI['admin'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index']);
    Route::post('/getTrackExport',[App\Http\Controllers\Admin\TrackingController::class, 'getTrackExport']);
    Route::post('/getTrackImport',[App\Http\Controllers\Admin\TrackingController::class, 'getTrackImport']);
    Route::post('/setTrack',[App\Http\Controllers\Admin\TrackingController::class, 'setTrack']);
    Route::get('/track',[App\Http\Controllers\Admin\TrackingController::class, 'index']);
    Route::post('/upload_data',[App\Http\Controllers\Admin\TrackingController::class, 'importExcel']);
    Route::get('/track-list',[App\Http\Controllers\Admin\TrackingController::class, 'list_track']);


});
