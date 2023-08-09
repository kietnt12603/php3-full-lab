<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function chitiet($id = 0)
    {
        $tin = DB::table('tin')
        ->where('id', $id)
        ->first();
        $data = ['id' => $id, 'tin' => $tin];
        return view('chitiet', $data);
    }

    public function tintrongloai($idLT = 0)
    {
        $tenloai = DB::table('loaitin')
        ->select('moTa')
        ->where('idLT','=', $idLT)
        ->first();
        $listtin = DB::table('tin')
        ->where('loaiTin', $idLT)
        ->get();
        $data = ['idLT' => $idLT, 'listtin' => $listtin, 'tenloai' => $tenloai];
        return view('tintrongloai', $data);
    }
}
