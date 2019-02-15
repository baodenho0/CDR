<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\cocautochuc;

class cocautochucController extends Controller
{
    //
    public function getcocautochuc(){
    	$data['cocautochuc'] = cocautochuc::first();
    	return view('admin.cocautochuc.cocautochuc',$data);
    }
    public function postcocautochuc(Request $request){
    	$this->validate($request,[
    		'mota'=>'required'
    	],[
    		'mota.required'=>'Chưa nhập nội dung'
    	]);
    	$cocautochuc = cocautochuc::first();
    	$cocautochuc->noidung = $request->mota;
    	$cocautochuc->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
