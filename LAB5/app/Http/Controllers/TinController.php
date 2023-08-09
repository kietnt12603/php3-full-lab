<?php

namespace App\Http\Controllers;

use App\Models\tin;
use Illuminate\Http\Request;

class TinController extends Controller
{
    function index(){
        $data = \App\Models\tin::all();
        return view('tin.danhsach', ['data' => $data]);
    }

    function them(){
        return view('tin.themtin');
    }

    function them_(){
        $t = new tin();
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/tin/ds');
    }

    function xoa($id){
            $t = tin::find($id);
            if($t==null) return redirect('/thongbao');
            $t->delete();
            return redirect('/tin/ds');
        }
    
    function capnhat($id){
        $t = tin::find($id);
        if($t==null) return redirect('/thongbao');
        return view('tin.capnhat', ['t' => $t]);
    }

    function capnhat_($id){
        $t = tin::find($id);
        if($t==null) return redirect('/thongbao');
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/tin/ds');
    }
    

}
