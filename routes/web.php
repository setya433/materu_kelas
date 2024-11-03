<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DokumentasiController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/materi', [MateriController::class, 'index']);
Route::get('/materi/create', [MateriController::class, 'create'])->name('materi.create');
Route::post('/materi/store', [MateriController::class, 'store'])->name('materi.store');
Route::post('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi.show');

Route::get('/dokumentasi',[DokumentasiController::class,'index']);
Route::get('dokumentasi/create', [DokumentasiController::class, 'create'])->name('dokumentasi.create');
Route::post('/dokumentasi/store', [DokumentasiController::class, 'store'])->name('dokumentasi.store');
Route::post('/dokumentasi',[DokumentasiController::class,'index'])->name('dokumentasi.index');

