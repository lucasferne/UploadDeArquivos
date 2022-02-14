<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index']);
Route::get('form', [UploadController::class, 'create']);
Route::view('menu', 'menu.menu');
Route::post('menu',[MenuController::class, 'store'])->name('menu-upload');
Route::post('upload', [UploadController::class, 'upload'])->name('upload');

Route::get('{menu}', [MenuController::class, 'novaview']);