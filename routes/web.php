<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileGuruController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('index');
});

Route::get('/register', function (){
    return view('register');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/berita_acara', function (){
    return view('dashboard_admin/berita/berita_acara');
});

Route::get('/data_akun', function (){
    return view('dashboard_admin/data_akun/data_akun');
});

Route::get('/data_peserta', function (){
    return view('dashboard_admin/data_peserta/data_peserta');
});

Route::get('/admin', function (){
    return view('dashboard_admin/admin/admin');
});

Route::get('/fasilitas', function (){
    return view('dashboard_admin/fasilitas/fasilitas');
});

Route::get('/hasil_ujian', function (){
    return view('dashboard_admin/hasil_ujian/hasil_ujian');
});

Route::get('/kata_alumni', function (){
    return view('dashboard_admin/kata_alumni/kata_alumni');
});

Route::get('/pembayaran', function (){
    return view('dashboard_admin/pembayaran/pembayaran');
});

Route::get('/prestasi', function (){
    return view('dashboard_admin/prestasi/prestasi');
});

Route::get('/profile_guru', function (){
    return view('dashboard_admin/profile_guru/profile_guru');
});

Route::get('/program_unggulan', function (){
    return view('dashboard_admin/program_unggulan/program_unggulan');
});

Route::get('/soal_ujian', function (){
    return view('dashboard_admin/soal_ujian/soal_ujian');
});

Route::get('/daftar', function (){
    return view('register_akun');
});

// route kirim data
Route::resource('profileguru', ProfileGuruController::class);
// route daftar akun
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


