<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'homepage']);
Route::get('/home', [DashboardController::class, 'homepage']);

Route::get('/register', [FormController::class, 'registeracc']);
Route::post('welcome', [FormController::class, 'welcomepage']);


Route::get('/master', function(){
    return view('layout.master');
});

Route::get('/booktemp', function(){
    return view('layout.booktemp');
});

Route::get('/formtemp', function(){
    return view('layout.formtemp');
});