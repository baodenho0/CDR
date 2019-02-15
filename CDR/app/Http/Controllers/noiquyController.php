<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\noiquy;

class noiquyController extends Controller
{
    //
    public function getnoiquy(){
    	$data['noiquy'] = noiquy::first();
    	return view('admin.noiquy.noiquy',$data);
    }
    public function postnoiquy(Request $request){
    	$this->validate($request,[
    		'mota'=>'required'
    	],[
    		'mota.required'=>'Chưa nhập nội dung'
    	]);
    	$noiquy = noiquy::first();
    	$noiquy->noidung = $request->mota;
    	$noiquy->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
