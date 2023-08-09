<?php

use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TinController::class, 'index']);
Route::get('/lienhe', [TinController::class, 'lienhe']);
Route::get('/ct/{id}', [TinController::class, 'lay1tin']);
Route::get('thongtinsv', [TinController::class, 'thongtinsv']);
