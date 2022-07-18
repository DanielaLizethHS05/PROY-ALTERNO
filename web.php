<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/pdf', [App\Http\Controllers\HomeController::class, 'pdf'])->name('pdf')->middleware();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware();
Route::get('/FrmAuto', [App\Http\Controllers\HomeController::class, 'FrmAuto'])->name('FrmAuto')->middleware();
Route::get('/index', [App\Http\Controllers\PrestamoController::class, 'index'])->name('index')->middleware();
Route::post('/tablas', [App\Http\Controllers\HomeController::class, 'tablas'])->name('tablas')->middleware();
Route::get('/FrmNomina', [App\Http\Controllers\HomeController::class, 'FrmNomina'])->name('FrmNomina')->middleware();
Route::get('/FrmHipotecario', [App\Http\Controllers\HomeController::class, 'FrmHipotecario'])->name('FrmHipotecario')->middleware();
