<?php

use App\Http\Controllers\HsController;
use App\Http\Controllers\SvController;
use App\Mail\GuiEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HsController::class, 'index']);
Route::get("hs",[App\Http\Controllers\HsController::class,'hs']);
Route::post("hs",[App\Http\Controllers\HsController::class,'hs_store'])->name('hs_store');
Route::get("hs_edit/{id}",[App\Http\Controllers\HsController::class,'hs_edit']);
Route::post("hs_edit/{id}",[App\Http\Controllers\HsController::class,'hs_edit_'])->name('hs_edit');
Route::get("hs_delete/{id}",[App\Http\Controllers\HsController::class,'hs_xoa'])->name('hs_delete');

Route::get('/dssv', [SvController::class, 'index'])->name('dssv');
Route::get("sv",[App\Http\Controllers\SvController::class,'sv']);
Route::post("sv",[App\Http\Controllers\SvController::class,'sv_store']) ->name('sv_store');
Route::get("sv_edit/{masv}",[App\Http\Controllers\SvController::class,'sv_edit']);
Route::post("sv_edit/{masv}",[App\Http\Controllers\SvController::class,'sv_edit_'])->name('sv_edit');
Route::get("sv_delete/{masv}",[App\Http\Controllers\SvController::class,'sv_xoa'])->name('sv_delete');

Route::get("/guimail", function(){
    $diem =['toan'=>9, 'van'=>10];
    Mail::mailer('mailgun')
    ->to('conbadung12603@gmail.com')
    ->send(new GuiEmail($diem));
 });
