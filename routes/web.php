<?php

use App\Http\Controllers\DropBoxController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DropBoxController::class, 'index']);
Route::post('upload', [DropBoxController::class, 'upload'])->name('upload');
