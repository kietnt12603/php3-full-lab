<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/txn', function(){
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'xem')
    ->orderBy('xem', 'desc')
    ->limit(10);
    $data = $query->get();
    foreach ($data as $tin) echo "<h1> {$tin->tieuDe} </h1>";
});

Route::get('/tinmoi', function(){
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'ngayDang')
    ->orderBy('ngayDang', 'desc')
    ->limit(10);
    $data = $query->get();
    return view('tinmoi', ['data' => $data]);
});

// Route::get('tintrongloai/{id}', function ($id) {
//     $query = DB::table('tin')
//     ->select('id', 'tieuDe', 'tomTat')
//     ->where('loaiTin','=', $id)
//     ->orderBy('ngayDang', 'desc');
//     $data = $query->get();
//     return view('tintrongloai', ['data' => $data]);
// });

Route::get('/tin/{id}', function ($id) {
    $tin = DB::table('tin')
    ->where('id', $id)->first();
    return view('chitiettin', ['tin' => $tin]);
});

Route::get('tintrongloai/{id}', function ($id) {
    $query = DB::table('tin')
    ->select('id', 'tieuDe', 'tomTat')
    ->where('loaiTin','=', $id)
    ->orderBy('ngayDang', 'desc')
    ->get();
    $tenloai = DB::table('tin')
    ->join('loaitin', 'tin.loaiTin', '=', 'loaitin.idLT')
    ->select('moTa')
    ->where('loaiTin','=', $id)
    ->first();
    return view('tintrongloai', ['data' => $query ,'tenloai'=> $tenloai]);
});

