<?php

use App\Http\Controllers\GrafikController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

// Route::get('/umur', [GrafikController::class, 'index']);
Route::get('/grafik-umur', [GrafikController::class, 'umur'])->name('grafik');
Route::resource('penduduk', PendudukController::class);