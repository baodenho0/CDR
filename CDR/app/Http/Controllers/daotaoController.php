<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\daotao;

class daotaoController extends Controller
{
    //
    public function getdaotao(){
    	$data['daotao'] = daotao::first();
    	return view('admin.daotao.daotao',$data);
    }

    public function postdaotao(Request $request){
    	$this->validate($request,[
    		'mota'=>'required'
    	],[
    		'mota.required'=>'Chưa nhập nội dung',
    	]);
    	$daotao = daotao::first();
    	$daotao->noidung = $request->mota;
    	$daotao->save();
    	return back()->with('thongbao','Cập nhật thành công');

    }
}
