<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//home view
Route::view('/', 'home');

Route::resource('jobs', JobController::class);
