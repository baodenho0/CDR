<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\cosovatchat;

class cosovatchatController extends Controller
{
    //
    public function getcosovatchat(){
    	$data['cosovatchat'] = cosovatchat::first();
    	return view('admin.cosovatchat.cosovatchat',$data);
    }
    public function postcosovatchat(Request $request){
    	$this->validate($request,[
    		'mota'=>'required'
    	],[
    		'mota.required'=>'Chưa nhập nội dung'
    	]);
    	$cosovatchat = cosovatchat::first();
    	$cosovatchat->noidung = $request->mota;
    	$cosovatchat->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
