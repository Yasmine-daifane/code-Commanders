<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\dashboardController;


Route::get('/dash', [dashboardController::class, 'index']);
Route::post('/form/store', [formController::class, 'store'])->name('form.store');

