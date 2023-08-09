<?php

use App\Http\Controllers\TinController;
use App\Models\tin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tin/ds', [TinController::class, 'index'])->name('dstin');

Route::get('/tin/them',[TinController::class, 'them'])->name('themtin');
Route::post('/tin/them',[TinController::class, 'them_']);

Route::get('/tin/xoa/{id}', [TinController::class, 'xoa'])->name('xoatin');

Route::get('/tin/capnhat/{id}', [TinController::class,'capnhat'])->name('capnhattin');
Route::post('/tin/capnhat/{id}', [TinController::class,'capnhat_']);