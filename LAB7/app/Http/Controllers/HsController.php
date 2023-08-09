<?php

namespace App\Http\Controllers;

use App\Models\hs;
use Illuminate\Http\Request;

class HsController extends Controller
{
    public function index(){
        $hs = hs::all();
        return view('dshs', ['data' => $hs]);
    }
    public function hs()
    {
        return view("nhaphs");
    }
    function hs_store(Request $request)
    {
        $request->validate([
            'hoten'=>['required', 'min:3', 'max:20'],
            'tuoi' => 'required|integer|min:16|max:100',
            'ngaysinh' => ['required','date'],
        ]);
        $t = new hs();
        $t->hoten = $_POST['hoten'];
        $t->tuoi = $_POST['tuoi'];
        $t->ngaysinh = $_POST['ngaysinh'];
        $t->save();
        return redirect('/');
    }

    function hs_edit($id){
        $t = hs::find($id);
        return view('suahs', ['data' => $t]);
    }

    function hs_edit_($id){
        $t = hs::find($id);
        if($t==null) return redirect('/thongbao');
        $t->hoten = $_POST['hoten'];
        $t->tuoi = $_POST['tuoi'];
        $t->ngaysinh = $_POST['ngaysinh'];
        $t->save();
        return redirect('/');
    }

    function hs_xoa($id){
        $t = hs::find($id);
        if($t==null) return redirect('/thongbao');
        $t->delete();
        return redirect('/');
    }

}
