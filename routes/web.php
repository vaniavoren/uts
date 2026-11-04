<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('MataKuliah.index');
});

Route::get('/MataKuliah', [MataKuliahController::class, 'index'])->name('MataKuliah.index');
Route::get('/create-MataKuliah', [MataKuliahController::class, 'create'])->name('MataKuliah.create');
Route::post('/MataKuliah', [MataKuliahController::class, 'store'])->name('create.MataKuliah');
Route::get('/MataKuliah/{id}', [MataKuliahController::class, 'show'])->name('MataKuliah.show');
Route::get('/edit-MataKuliah/{id}', [MataKuliahController::class, 'edit'])->name('MataKuliah.edit');
Route::put('/MataKuliah/{id}', [MataKuliahController::class, 'update'])->name('MataKuliah.update');
Route::delete('/MataKuliah/{id}', [MataKuliahController::class, 'destroy'])->name('MataKuliah.destroy');

Route::get('/Absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/create-Absensi', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/Absensi', [AbsensiController::class, 'store'])->name('absensi.store');