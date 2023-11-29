<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;

Route::get('/', function () {
    return view('welcome');
});

// Menampilkan daftar barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// Menampilkan form tambah barang
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Menyimpan data barang baru
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

// Menampilkan form edit barang
Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');

// Mengupdate data barang
Route::put('/barang/{barang}', [BarangController::class, 'update'])->name('barang.update');

// Menghapus data barang
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');

// Menampilkan detail barang berdasarkan ID
Route::get('/barang/{barang}', [BarangController::class, 'show'])->name('barang.show');

// Menampilkan form konfirmasi penghapusan barang
Route::get('/barang/{barang}/delete', [BarangController::class, 'deleteConfirmation'])->name('barang.delete-confirmation');

// Menampilkan halaman pencarian barang
Route::get('/barang/search', [BarangController::class, 'search'])->name('barang.search');

Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
Route::get('/kasir/create', [KasirController::class, 'create'])->name('kasir.create');
Route::post('/kasir', [KasirController::class, 'store'])->name('kasir.store');




