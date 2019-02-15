<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;
use App\bocuc;
use App\danhmuc_hoatdong;
use App\slide;
use App\thongbao;
use App\lienhe;
use App\gioithieu;
use App\nhiemvuchucnang;
use App\cocautochuc;
use App\noiquy;
use App\cosovatchat;
use App\daotao;
use App\hoatdong;
use App\seo;
use App\fb;
use App\danhmuc_anh;
use App\anh;
use App\icon;
use App\ketnoi;

class nguoidungController extends Controller
{
    //
    function __construct(){
        $bocuc = bocuc::first();
        $danhmuchoatdong = danhmuc_hoatdong::all();
        $thongbao = thongbao::orderBy('id','desc')->take(4)->get();
        $lienhe = lienhe::first();
        $fb = fb::first();
        $seo = seo::first();
        $icon = icon::first();
        $ketnoi = ketnoi::first();
        view()->share('bocuc',$bocuc);
        view()->share('danhmuchoatdong',$danhmuchoatdong);
        view()->share('thongbao',$thongbao);
        view()->share('lienhe',$lienhe);
        view()->share('fb',$fb);
        view()->share('seo',$seo);
        view()->share('icon',$icon);
        view()->share('ketnoi',$ketnoi);
    }
    public function gettrangchu(){
        $data['slide'] = slide::all();
        $data['tintuc'] = tintuc::orderBy('id','desc')->first();
        $data['hoatdong'] = hoatdong::orderBy('id','desc')->first();
    	return view('nguoidung.trangchu.trangchu',$data);
    }

    public function getgioithieu(){
        $data['gioithieu'] = gioithieu::first();
    	return view('nguoidung.gioithieu.gioithieu',$data);
    }

    public function getnhiemvuchucnang(){
        $data['nhiemvuchucnang'] = nhiemvuchucnang::first();
    	return view('nguoidung.nhiemvuchucnang.nhiemvuchucnang',$data);
    }

    public function getcocautochuc(){
        $data['cocautochuc'] = cocautochuc::first();
    	return view('nguoidung.cocautochuc.cocautochuc',$data);
    }

    public function getnoiquy(){
        $data['noiquy'] = noiquy::first();
    	return view('nguoidung.noiquy.noiquy',$data);
    }

    public function getcosovatchat(){
        $data['cosovatchat'] = cosovatchat::first();
    	return view('nguoidung.cosovatchat.cosovatchat',$data);
    }
    // --
    public function getdaotao(){
        $data['daotao'] = daotao::first();
    	return view('nguoidung.daotao.daotao',$data);
    }

    public function gettintuc(){
        $data['tintuc'] = tintuc::orderBy('id','desc')->paginate(3);
    	return view('nguoidung.tintuc.tintuc',$data);
    }

    public function getlienhe(){
        $data['lienhe'] = lienhe::first();
    	return view('nguoidung.lienhe.lienhe',$data);
    }

    public function gethoatdong($id){
        $data['hoatdong'] = hoatdong::orderBy('id','desc')->where('id_danhmuc',$id)->paginate(3);
        return view('nguoidung.hoatdong.hoatdong',$data);
    }

    public function getthongbao($id){
        $data['thongbao1'] = thongbao::find($id);
        return view('nguoidung.thongbao.thongbao',$data);
    }

    public function gethinhanh(){
         $data['hinhanh'] = danhmuc_anh::all();
         return view('nguoidung.hinhanh.hinhanh',$data);
    }

    public function getanh($id){
        $data['anh'] = anh::where('id_danhmuc',$id)->paginate(10);
        return view('nguoidung.anh.anh',$data);

    }
}
