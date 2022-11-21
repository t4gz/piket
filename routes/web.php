<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::get('/', function () 
        {return view('standard_page');});
        //
    Route::get('/dash-siswa', function () 
    {return view('dashboard_siswa');}); 
    Route::get('/dash-admin', function () 
    {return view('admin.dashboard_admin');});     
    Route::get('/lapor-siswa', function () 
    {return view('siswa.laporan_siswa');}); 
    Route::get('/absen-siswa', function () 
    {return view('siswa.absen_siswa');});
});


Route::middleware('auth')->group(function(){
    //dashboard
    Route::resource('dashboard', DashboardController::class);

    //logout
    Route::post('logout', [LoginController::class, 'logout']);
});

