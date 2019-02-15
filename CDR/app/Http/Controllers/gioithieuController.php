<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\gioithieu;

class gioithieuController extends Controller
{
    //
    public function getgioithieu(){
    	$data['gioithieu'] = gioithieu::first();
    	return view('admin.gioithieu.gioithieu',$data);
    }

    public function postgioithieu(Request $request){
    	$this->validate($request,[
    		'mota'=>'required'
    	],[
    		'mota.required'=>'Chưa nhập nội dung',
    	]);
    	$gioithieu =  gioithieu::first();
    	$gioithieu->noidung = $request->mota;
    	$gioithieu->save();
    	return back()->with('thongbao','Cập nhật thành công');

    }

}
