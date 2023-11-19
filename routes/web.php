<?php

use App\Http\Controllers\dashboardTiketController;
use App\Http\Controllers\JadwalKapalController;
use App\Http\Controllers\ListKapalController;
use App\Http\Controllers\PesanTiketController;
use App\Http\Controllers\UserReservasiTiket;
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

Route::get('/', function () {
    return view('home',[
        'active' => 'home'
    ]);
});

Route::get('/user/reservasi', [UserReservasiTiket::class,'index']);
Route::get('/jadwal/{id}',[UserReservasiTiket::class,'jadwalAjax']);
Route::get('/pesan_tiket/{jadwal_kapal:id}',[PesanTiketController::class,'index']);
Route::post('/pesan_tiket/{jadwal_kapal:id}/add', [PesanTiketController::class, 'store']);

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/tikets/{tiket:id}/download',[dashboardTiketController::class,'download']);

Route::resource('/dashboard/list_kapals', ListKapalController::class);

Route::resource('/dashboard/jadwal_kapals', JadwalKapalController::class);

Route::resource('/dashboard/tikets', dashboardTiketController::class);

Route::get('/dashboard/jadwal_kapals/{kapal:id}/add_jadwal', [JadwalKapalController::class,'add_jadwal']);
