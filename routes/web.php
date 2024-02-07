<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

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

Route::controller(KaryawanController::class)->group(function () {
    Route::get('/', 'index')->name('karyawan.index');
    Route::get('/karyawan/create', 'create')->name('karyawan.create');
    Route::post('/karyawan', 'store')->name('karyawan.store');
    Route::get('/karyawan/{karyawan}', 'show')->name('karyawan.show');
    Route::get('/karyawan/{karyawan}/edit', 'edit')->name('karyawan.edit');
    Route::put('/karyawan/{karyawan}', 'update')->name('karyawan.update');
    Route::delete('/karyawan/{karyawan}', 'destroy')->name('karyawan.destroy');
});
