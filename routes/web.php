<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;


Route::get('/form', [formController::class, 'index'])->name('form');
Route::post('/form/store', [formController::class, 'store'])->name('form.store');

