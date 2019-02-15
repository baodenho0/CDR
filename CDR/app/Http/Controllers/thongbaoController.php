<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\thongbao;

class thongbaoController extends Controller
{
    //
    public function getthongbao(){
    	$data['thongbao'] = thongbao::orderBy('id','desc')->paginate(5);

    	return view('admin.thongbao.thongbao',$data);
    }

    public function getthem(){
    	return view('admin.thongbao.them');
    }
    public function postthem(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required|unique:thongbao,ten',
    		'noidung'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'noidung.required'=>'Chưa có nội dung',
    	]);
    	$thongbao = new thongbao;
    	$thongbao->ten = $request->tieude;
    	$thongbao->tenkhongdau = str_slug($request->tieude);
    	$thongbao->noidung = $request->noidung;
    	$thongbao->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['thongbao'] = thongbao::find($id);
    	return view('admin.thongbao.sua',$data);

    }

    public function postsua(Request $request,$id){
    	$this->validate($request,[
    		'tieude'=>'required|unique:thongbao,ten,'.$request->segment(4).',id',
    		'noidung'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'noidung.required'=>'Chưa có nội dung',
    	]);
    	$thongbao =thongbao::find($id);
    	$thongbao->ten = $request->tieude;
    	$thongbao->tenkhongdau = str_slug($request->tieude);
    	$thongbao->noidung = $request->noidung;
    	$thongbao->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$thongbao = thongbao::find($id);
    	$thongbao->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    public function posttimkiem(Request $request){
        $tim = $request->timkiem;
        $data['thongbao'] = thongbao::where('ten','like',"%$tim%")->paginate(5);
        return view('admin.thongbao.thongbao',$data);
    }
}
