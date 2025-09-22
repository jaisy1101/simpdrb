<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'index'])->name('search');

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LapanganUsahaController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\OperatorController;

// Beranda
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Pengeluaran
Route::prefix('pengeluaran')->group(function () {
    Route::get('/upload', [PengeluaranController::class, 'upload'])->name('pengeluaran.upload');
    Route::get('/daftar', [PengeluaranController::class, 'daftar'])->name('pengeluaran.daftar');
    Route::get('/perubahan', [PengeluaranController::class, 'perubahan'])->name('pengeluaran.perubahan');
    Route::get('/hasil-konserda', [PengeluaranController::class, 'hasilKonserda'])->name('pengeluaran.hasil');
});

// Lapangan Usaha
Route::prefix('lapangan-usaha')->group(function () {
    Route::get('/upload', [LapanganUsahaController::class, 'upload'])->name('lapangan.upload');
    Route::get('/daftar', [LapanganUsahaController::class, 'daftar'])->name('lapangan.daftar');
    Route::get('/perubahan', [LapanganUsahaController::class, 'perubahan'])->name('lapangan.perubahan');
    Route::get('/hasil-konserda', [LapanganUsahaController::class, 'hasilKonserda'])->name('lapangan.hasil');
});

// Monitoring
Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring');

// Forum
Route::get('/forum', [ForumController::class, 'index'])->name('forum');

// Operator
Route::get('/operator', [OperatorController::class, 'index'])->name('operator');

use App\Http\Controllers\TabelController;

Route::get('/tabel/upload', [TabelController::class, 'create'])->name('tabel.upload');
Route::post('/tabel/upload', [TabelController::class, 'store'])->name('tabel.store');
