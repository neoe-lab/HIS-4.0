<?php

use App\Http\Controllers\Dev\devController;
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
Route::get('/ipd',[devController::class,'index'])->name('ipd-page');
// page dent
Route::get('/dent',[devController::class,'index'])->name('dent-page');
// page ppt
Route::get('/ppt',[devController::class,'index'])->name('ppt-page');
// page er
Route::get('/er',[devController::class,'index'])->name('er-page');
// page cd 
Route::get('/cd',[devController::class,'index'])->name('cd-page');
// page ncd 
Route::get('/ncd',[devController::class,'index'])->name('ncd-page');
// page pts
Route::get('/pts',[devController::class,'index'])->name('pts-page');
// page xray
Route::get('/xray',[devController::class,'index'])->name('xray-page');
// page lab
Route::get('/lab',[devController::class,'index'])->name('lab-page');
// page refer
Route::get('/refer',[devController::class,'index'])->name('refer-page');