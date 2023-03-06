<?php

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

Route::group(['middleware' => ['blockIPAddress']], function () {
    Route::get('/', function () {
        return redirect('/dashboard');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', [\App\Http\Controllers\CountryController::class, 'index'])->name('dashboard');
        Route::post('/country', [\App\Http\Controllers\CountryController::class, 'store'])->name('country.store');
        Route::get('/country/{id}', [\App\Http\Controllers\CountryController::class, 'edit'])->name('country.edit');
        Route::post('/country/{id}', [\App\Http\Controllers\CountryController::class, 'update'])->name('country.update');
        Route::get('/country/destroy/{id}', [\App\Http\Controllers\CountryController::class, 'destroy'])->name('country.destroy');
    });

    require __DIR__.'/auth.php';
});

