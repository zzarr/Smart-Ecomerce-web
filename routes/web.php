<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Petani\{
    DashboardPetaniController,
    AkunPetniController,
    PesananController,
    KategoriController
};
use App\Http\Controllers\HomeController;


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

Route::get('/home/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/home/detail', [HomeController::class, 'detail_produk'])->name('detail_produk');
Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('proses', [LoginController::class, 'login'])->name('proses');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::group(['middleware' => ['role:petani']], function () {
    Route::prefix(('petani'))->group(function () {

        Route::get('/dashboard_petani', [DashboardPetaniController::class, 'index'])->name('dashboard_petani');

        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
        Route::get('/tambah_kategori', [KategoriController::class, 'add'])->name('add_kategori');


        Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
    });
});

Route::group(['middleware' => ['role:konsumen']], function () {
    route::get('/dashboard_konsumen', [DashboardPetaniController::class, 'index'])->name('dashboard_konsumen');
});
