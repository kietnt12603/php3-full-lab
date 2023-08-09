<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    // public function index(){
    //     echo "Đây Là Trang Chủ";
    // }

    // public function lienhe(){
    //     echo "Đây Là Trang Liên Hệ";
    // }

    public function index(){
        return view('index');
    }

    public function lienhe(){
        return view('lienhe');
    }

    public function lay1tin($id){
        $data = ['id'=>$id];
        return view('chitiet', $data);
    }

    public function thongtinsv(){
        return view('thongtinsv',[
            'ten'=>'Nguyễn Tuấn Kiệt',
            'gioitinh'=>'Nam',
            'quequan' => 'Quế Phong, Quế Sơn, Quảng Nam',
            'namsinh'=>'18/06/2003',
            'mssv'=> 'PD06323',
            'email'=>'conbadung12603@gmail.com',
            'sdt'=>'0918362940',
            'fb'=>'https://www.facebook.com/kietdb12603/',
            'fbName'=>'Nguyễn Tuấn Kiệt',
            'image'=>'kietdb12603.jpg',
            'website'=>'https://ntk2003.shop',
            'github'=>'https://github.com/kietnt12603',
            'githubName'=>'kietnt12603',
        ]);
    }

}
