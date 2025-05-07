<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;


Route::get('/home', [DashboardController::class, 'homePage'] );
Route::get('/register', [FormController::class, 'registerACC'] );
Route::get('welcome', [FormController::class, 'welcomePage'] );
