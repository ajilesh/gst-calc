<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GstController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','gstCalculation');
Route::get('/gst',[GstController::class,'index']);
Route::post('/gst',[GstController::class,'gstCalculation'])->name('gst');
