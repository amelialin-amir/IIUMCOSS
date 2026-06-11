<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeteriaController;
use App\Http\Controllers\ScheduleController;

Route::get('/cafeterias',
[CafeteriaController::class,'index']);

Route::get('/schedules',
[ScheduleController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
