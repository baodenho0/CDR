<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\lienhe;

class lienheController extends Controller
{
    //
	public function getlienhe(){
		$data['lienhe'] = lienhe::first();
		return view('admin.lienhe.lienhe',$data);
	}
	public function postlienhe(Request $request){
		$this->validate($request,[
			'mota'=>'required'
		],[
			'mota.required'=>'Chưa nhập nội dung'
		]);
		$lienhe = lienhe::first();
		$lienhe->noidung = $request->mota;
		$lienhe->save();
		return back()->with('thongbao','Cập nhật thành công');
	}
}
