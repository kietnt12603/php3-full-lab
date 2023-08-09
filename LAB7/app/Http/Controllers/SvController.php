<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapSV;
use App\Models\sv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SvController extends Controller
{

    public function index(){
        $sv = sv::all();
        return view('dssv',['data' => $sv]);
    }

    public function sv()
    {
        return view("nhapsv");
    }
    
    function sv_store(RuleNhapSV $request){
        $sv = new sv();
        $sv->masv = $_POST['masv'];
        $sv->hoten = $_POST['hoten'];
        $sv->tuoi = $_POST['tuoi'];
        $sv->ngaysinh = $_POST['ngaysinh'];
        $sv->cmnd = $_POST['cmnd'];
        $sv->email = $_POST['email'];
        $sv->save();
        return redirect()->route('dssv');
    }

    function sv_edit($masv){
        $t = sv::where('masv', $masv)->first();
        return view('suasv', ['data' => $t]);
    }

    function sv_edit_($masv){
        $t = sv::where('masv', $masv)->first();
        // if($t==null) return redirect('/thongbao');
        $t->masv = $_POST['masv'];
        $t->hoten = $_POST['hoten'];
        $t->tuoi = $_POST['tuoi'];
        $t->ngaysinh = $_POST['ngaysinh'];
        $t->cmnd = $_POST['cmnd'];
        $t->email = $_POST['email'];
        $t->save();
        return redirect('/dssv');
    }

    
    function sv_xoa($masv){
        $deleted = DB::table('sv')->where('masv', 'like', $masv)->delete();
        return redirect('/dssv');
    }
}
