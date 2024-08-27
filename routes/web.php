<?php

use App\Http\Controllers\DasController;
use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome',[DasController::class,'refreshDashboard'])->name('dashboard.refresh');

//Eleves
Route::get('/show/eleve',[EleveController::class,'show'])->name('eleve.show');
Route::get('/all/eleve',[EleveController::class,'all'])->name('eleve.all');
