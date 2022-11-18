<?php

use App\Http\Controllers\Hosxp\opdController;
use App\Http\Controllers\Hosxp\todayController;
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
// page home
Route::get('/',[todayController::class,'index'])->name('home-page');

// page opd
Route::get('/opd',[opdController::class,'index'])->name('opd-page');
// page ipd

// page dent

// page ppt

// page er

// page cd 

// page ncd 

// page pts

// page xray

// page refer
