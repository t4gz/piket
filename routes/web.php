<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminAbsenController;
use App\Http\Controllers\LaporanController;
use App\Models\Absen;
use App\Models\jurusan;
use App\Models\kelas;
use App\Models\nama_kelas;
use App\Models\siswa;

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

Route::get(
    '/',
    function () {
        return view('standard_page');
    }

);

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::resource('register', RegisterController::class);
});


Route::middleware('admin')->group(function () {
    //dashboard
    Route::resource('admin', DashboardController::class);

    //laporan
    Route::get('laporan-admin/hapus', [AdminLaporanController::class, 'hapus'])->name('laporan-admin.hapus');
    Route::resource('laporan-admin', AdminLaporanController::class);

    //absen
    Route::get('absen-admin/hapus', [AdminAbsenController::class, 'hapus'])->name('absen-admin.hapus');
    Route::resource('absen-admin', AdminAbsenController::class);

    Route::get('editlaporan', function () {
        return view('admin.edit_laporan');
    });


    Route::resource('siswa-admin', SiswaController::class);
});

Route::middleware('siswa')->group(function () {
    //dashboard siswa
    Route::resource('siswa', DashboardSiswaController::class);

    Route::resource('absen', AbsenController::class);

    Route::resource('laporan', LaporanController::class);

    Route::get('/info-siswa', [DashboardSiswaController::class, 'info'])->name('siswa.info');
});

//landing 
Route::view('land', 'landing.LandingPageTemplate');

//logout
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');
