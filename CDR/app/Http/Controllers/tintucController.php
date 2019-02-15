<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\tintuc;

class tintucController extends Controller
{
    //
    public function gettintuc(){
    	$data['tintuc'] = tintuc::orderBy('id','desc')->paginate(5);

    	return view('admin.tintuc.tintuc',$data);
    }

    public function getthem(){
    	return view('admin.tintuc.them');
    }
    public function postthem(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required|unique:tintuc,ten',
    		'noidung'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'noidung.required'=>'Chưa có nội dung',
    	]);
    	$tintuc = new tintuc;
    	$tintuc->ten = $request->tieude;
    	$tintuc->tenkhongdau = str_slug($request->tieude);
    	$tintuc->noidung = $request->noidung;
    	$tintuc->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['tintuc'] = tintuc::find($id);
    	return view('admin.tintuc.sua',$data);

    }

    public function postsua(Request $request,$id){
    	$this->validate($request,[
    		'tieude'=>'required|unique:tintuc,ten,'.$request->segment(4).',id',
    		'noidung'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'noidung.required'=>'Chưa có nội dung',
    	]);
    	$tintuc =tintuc::find($id);
    	$tintuc->ten = $request->tieude;
    	$tintuc->tenkhongdau = str_slug($request->tieude);
    	$tintuc->noidung = $request->noidung;
    	$tintuc->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$tintuc = tintuc::find($id);
    	$tintuc->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    public function posttimkiem(Request $request){
        $tim = $request->timkiem;
        $data['tintuc'] = tintuc::where('ten','like',"%$tim%")->paginate(5);
        return view('admin.tintuc.tintuc',$data);
    }

}
