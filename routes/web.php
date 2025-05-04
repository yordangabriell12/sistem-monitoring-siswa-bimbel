<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Rute untuk tampilan home
Route::get('/', [ProjectController::class, 'index']);

// Rute untuk resource CRUD
Route::resource('projects', ProjectController::class);
