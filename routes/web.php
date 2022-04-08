<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;

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

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/pendingPeserta', [PesertaController::class, 'pending'])->name('pendingPeserta');
    Route::get('/showConfirm/{id}', [PesertaController::class, 'showConfirm'])->name('showConfirm');
    Route::get('/statusConf/{id}', [PesertaController::class, 'setStatus'])->name('statusConf');
    Route::get('/deletePending/{id}', [PesertaController::class, 'deletePending'])->name('deletePending');
    Route::get('/hapus/{id}', [PesertaController::class, 'hapus'])->name('hapusData');

    Route::resource('peserta', PesertaController::class);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/registerNow', [DaftarController::class, 'store'])->name('registerNow');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
