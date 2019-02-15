<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ketnoi;

class ketnoiController extends Controller
{
    //
    public function getketnoi(){
    	$data['ketnoi'] = ketnoi::first();
    	return view('admin.ketnoi.ketnoi',$data);
    }
    public function postketnoi(Request $request){
    	$this->validate($request,[
    		'fb' =>'required',
    		'youtube' =>'required',
    		'sdt' =>'required|numeric|digits_between :8,12',
    	],[
    		'fb.required'=> 'Chưa nhập link FB',
    		'youtube.required'=> 'Chưa nhập link youtube',
    		'sdt.required'=> 'Chưa nhập số điện thoại',
    		'sdt.numeric'=>'Vui lòng nhập đúng số điện thoại',
    		'sdt.digits_between'=>'Vui lòng nhập đúng số điện thoại',
    		
    	]);
    	$ketnoi = ketnoi::first();
    	$ketnoi->fb= $request->fb;
    	$ketnoi->youtube= $request->youtube;
    	$ketnoi->sdt = $request->sdt;
    	$ketnoi->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
}
