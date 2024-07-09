<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\BookLogsController;
use App\Http\Controllers\DashBookController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
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




Route::middleware('auth')->group(function () {
    Route::get('/logs-book', [BookLogsController::class, 'logGreeting']);

    Route::resource('kategori', KategoriController::class);
    Route::resource('penulis', PenulisController::class);
    Route::resource('penerbit', PenerbitController::class);
    Route::resource('buku', BukuController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
Auth::routes();





Route::get('/', [DashBookController::class, 'index'])->name('home');

Route::get('/dash/kategori/{id}', [DashBookController::class, 'filterByKategori'])->name('filter.kategori');

Route::get('/dash/penulis/{id}', [DashBookController::class, 'filterByPenulis'])->name('filter.penulis');

Route::get('/dash/penerbit/{id}', [DashBookController::class, 'filterByPenerbit'])->name('filter.penerbit');
