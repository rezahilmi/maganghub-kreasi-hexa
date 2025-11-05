<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/table', [HomeController::class, 'table'])->name('table');
Route::get('/data-table', [HomeController::class, 'dataTable'])->name('dataTable');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/welcome', [AuthController::class, 'showWelcome'])->name('welcome');
Route::get('/cast', [CastController::class, 'index'])->name('cast.index');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::get('/cast/{id}', [CastController::class, 'show'])->name('cast.show');
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
Route::get('/cast/edit/{id}', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('cast.destroy');
