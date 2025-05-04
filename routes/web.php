<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;

Route::get('/', [ProjectController::class, 'index']);
Route::resource('projects', ProjectController::class);
Route::resource('students', StudentController::class);
