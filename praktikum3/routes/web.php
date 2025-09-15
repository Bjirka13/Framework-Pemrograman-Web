<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyProfileController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/barang', [BarangController::class, 'barang'])->name('barang');
Route::get('/tambahbarang', [BarangController::class, 'tambahBarang'])->name('barang.tambah');
Route::post('/simpan', [BarangController::class, 'simpan'])->name('barang.simpan');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/company_profile', [CompanyProfileController::class, 'company_profile'])->name('company_profile');