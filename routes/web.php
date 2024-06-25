<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Petani\DashboardPetaniController;
use \Illuminate\Support\Facades\DB;

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
    return redirect('/home');
});

Route::get('/home', function () {

    return view('home',);
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('proses', [LoginController::class, 'login'])->name('proses');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::group(['middleware' => ['role:petani']], function () {
    route::get('/dashboard', [DashboardPetaniController::class, 'index'])->name('dashboard_petani');
});

Route::group(['middleware' => ['role:konsumen']], function () {
    route::get('/dashboard', [DashboardPetaniController::class, 'index'])->name('dashboard_konsumen');
});
