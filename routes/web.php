<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

Route::get('/', fn () => redirect('/artikel'));
Route::resource('artikel', ArtikelController::class);
