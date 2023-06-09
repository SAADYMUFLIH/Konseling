<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guruController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\landingpageController;

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

//landingpage
Route::get('/',[landingpageController::class, 'Index'])->name('landingpage');

//login
Route::get('/login',[loginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class,'authenticating'])->middleware('guest');
Route::get('/logout',[loginController::class,'logout'])->middleware('auth');
 
//dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::controller(DashboardController::class)->group(function(){
    Route::get('/layout/home','home');
});

//guru
Route::get('/guru',[guruController::class,'guru'])->name('guru')->middleware('auth');

//siswa
Route::get('/siswa',[siswaController::class,'siswa'])->name('siswa')->middleware('auth');
Route::get('/tambahsiswa',[siswaController::class,'tambahsiswa'])->name('tambahsiswa')->middleware('auth');
Route::post('/insertsiswa',[siswaController::class,'insertsiswa'])->name('insertsiswa')->middleware('auth');
Route::get('/tampilsiswa/{id}',[siswaController::class,'tampilsiswa'])->name('tampilsiswa')->middleware('auth');
Route::post('/updatesiswa/{id}',[siswaController::class,'updatesiswa'])->name('updatesiswa')->middleware('auth');
Route::get('/deletesiswa/{id}',[siswaController::class,'deletesiswa'])->name('deletesiswa')->middleware('auth');

//kelas
Route::get('/kelas',[kelasController::class,'kelas'])->name('kelas')->middleware('auth');

//jadwal  
Route::get('/jadwal',[jadwalController::class,'jadwal'])->name('jadwal')->middleware('auth');

