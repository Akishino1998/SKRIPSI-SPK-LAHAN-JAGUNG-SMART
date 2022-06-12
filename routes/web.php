<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DashboardController;
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
    return redirect('/dashboard');
});
Route::middleware(['first', 'second'])->group(function () {

});
Route::controller(OrderController::class)->middleware(['auth'])->group(function () {
    Route::GET('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::name('master.')->group(function () {
        Route::resource('kriterias', App\Http\Controllers\KriteriaController::class);
        Route::resource('refLokasis', App\Http\Controllers\RefLokasiController::class);
        Route::resource('dataKriterias', App\Http\Controllers\DataKriteriaController::class);
        Route::resource('alternatifs', App\Http\Controllers\AlternatifController::class);
        Route::get('/hasil',[AlternatifController::class,'hasil'])->name('hasil');
        Route::get('/print/{idAlternatif}',[AlternatifController::class,'print'])->name('print');

    });
});

require __DIR__.'/auth.php';




