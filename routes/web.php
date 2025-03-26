<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SauceController;

Route::get('/', function () {
    return view('welcome');
});


// Routes pour les sauces
Route::get('/', [SauceController::class, 'index'])->name('sauces.index');
Route::get('/sauces', [SauceController::class, 'index'])->name('sauces.index');
Route::get('/sauces/create', [SauceController::class, 'create'])->name('sauces.create');
Route::post('/sauces/store', [SauceController::class, 'store'])->name('sauces.store');
Route::get('/sauce/{id}', [SauceController::class, 'show'])->name('sauces.show');
Route::get('/sauces/edit/{id}', [SauceController::class, 'edit'])->name('sauces.edit');
Route::put('/sauces/update/{id}', [SauceController::class, 'update'])->name('sauces.update');
Route::delete('/sauces/destroy/{id}', [SauceController::class, 'destroy'])->name('sauces.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');