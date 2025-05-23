<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\sesiController;
use App\Http\Controllers\siswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [sesiController::class, 'index']);
Route::post('/', [sesiController::class, 'login']);
Route::get('/logout', [sesicontroller::class,'logout'])->name('logout');


Route::get('/siswa', [siswaController::class, 'index']);
Route::get('/admin/form', [siswaController::class, 'create'])->name('siswa.create');
Route::post('/admin/form', [siswaController::class, 'store'])->name('siswa.store');
Route::get('/admin/form/{id}', [siswaController::class, 'edit'])->name('siswa.edit');
Route::put('/admin/form/{id}', [siswaController::class, 'update'])->name('siswa.update');


Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
Route::get('/admin/{id}', [siswaController::class, 'destroy'])->name('siswa.delete');