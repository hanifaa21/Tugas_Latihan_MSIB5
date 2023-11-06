<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\JenisProdukController;


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
    return view('welcome');
});

Route::get('/salam', function(){
    return "Assalamualaikum selamat belajar Laravel";
});

//tambah routing dengan parameter
Route::get('/staff/{nama}/{devisi}', function($nama, $devisi){
    return 'Nama Pegawai : '.$nama. '<br> Departemen : '.$devisi;
});

//routing dengan memanggil nama file dari view
Route::get('/kondisi', function(){
    return view('kondisi');
});

Route::get('/nilai', function(){
    return view('coba.nilai');
});

// routing dengan view dan array data
Route::get('/daftarnilai', function(){
    return view('coba.daftar');
});

// routing memanggil dari kelas controller
Route::get('/datamahasiswa',[LihatNilaiController::class, 'dataMahasiswa']); 

//routing memanggil dari kelas controller index /dashboard
Route::get('/dashboard',[DashboardController::class, 'index']);

//routing pemanggilan dari kelas kontroller index /pagenot
Route::get('/pagenot', [PagenotController::class, ' index']);

//memanggil seluruh fungsi atau function menggunakan resource
Route::resource('kartu', KartuController::class);

Route::resource('jenis_produk', JenisProdukController::class);
