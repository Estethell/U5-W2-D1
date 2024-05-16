<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'welcome'])->name('welcome');
Route::get('/libri', [MainController::class,'libri'])->name('libri');
Route::get('/add', [MainController::class,'add'])->name('add');
Route::get('/edit', [MainController::class,'edit'])->name('edit');


