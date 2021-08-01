<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
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
    return view('webcam_recorder_mainpage');
});

Route::post('/save-video',[VideoController::class,'save_video']);

// Route::get('/show-video',[VideoController::class,'show_video']);