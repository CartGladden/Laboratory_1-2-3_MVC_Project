<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('reservations.create');
});

Route::resource('reservations', ReservationsController::class);