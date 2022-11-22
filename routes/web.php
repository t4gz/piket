<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSiswaController;

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
});


Route::middleware(['auth', 'role:admin'])->group(function(){
    //dashboard
    Route::resource('admin', DashboardController::class);
});

    //dashboard siswa
    Route::resource('siswa', DashboardSiswaController::class);

//logout
    Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');