<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index']);
