<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/register',[HomeController::class,'register'])->name('register post');


