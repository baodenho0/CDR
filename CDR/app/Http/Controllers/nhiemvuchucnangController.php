<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\nhiemvuchucnang;

class nhiemvuchucnangController extends Controller
{
    //
    public function getnhiemvuchucnang(){
    	$data['nhiemvuchucnang'] = nhiemvuchucnang::first();
    	return view('admin.nhiemvuchucnang.nhiemvuchucnang',$data);
    }

    public function postnhiemvuchucnang(Request $request){
    	$this->validate($request,[
    		'mota'=>'required'
    	],[
    		'mota.required'=>'Chưa nhập nội dung'
    	]);
    	$nhiemvuchucnang = nhiemvuchucnang::first();
    	$nhiemvuchucnang->noidung = $request->mota;
    	$nhiemvuchucnang->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
