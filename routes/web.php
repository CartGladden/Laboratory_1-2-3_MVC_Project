<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layout.create');
});

Route::resource('layout', ReservationsController::class);
Route::resource('reservations', AdminController::class);