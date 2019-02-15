<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\hoatdong;
use App\danhmuc_hoatdong;

class hoatdongController extends Controller
{
    //
    public function gethoatdong(){
    	$data['hoatdong'] = hoatdong::orderBy('id','desc')->paginate(5);

    	return view('admin.hoatdong.hoatdong',$data);
    }

    public function getthem(){
    	$data['danhmuchoatdong'] = danhmuc_hoatdong::all();
    	return view('admin.hoatdong.them',$data);
    }
    public function postthem(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required|unique:hoatdong,ten',
    		'noidung'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'noidung.required'=>'Chưa có nội dung',
    	]);
    	$hoatdong = new hoatdong;
    	$hoatdong->ten = $request->tieude;
    	$hoatdong->tenkhongdau = str_slug($request->tieude);
    	$hoatdong->noidung = $request->noidung;
    	$hoatdong->id_danhmuc = $request->danhmuc;
    	$hoatdong->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['hoatdong'] = hoatdong::find($id);
    	$data['danhmuchoatdong'] = danhmuc_hoatdong::all();
    	return view('admin.hoatdong.sua',$data);

    }

    public function postsua(Request $request,$id){
    	$this->validate($request,[
    		'tieude'=>'required|unique:hoatdong,ten,'.$request->segment(4).',id',
    		'noidung'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'noidung.required'=>'Chưa có nội dung',
    	]);
    	$hoatdong =hoatdong::find($id);
    	$hoatdong->ten = $request->tieude;
    	$hoatdong->tenkhongdau = str_slug($request->tieude);
    	$hoatdong->noidung = $request->noidung;
    	$hoatdong->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$hoatdong = hoatdong::find($id);
    	$hoatdong->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    public function posttimkiem(Request $request){
        $tim = $request->timkiem;
        $data['hoatdong'] = hoatdong::where('ten','like',"%$tim%")->paginate(5);
        return view('admin.hoatdong.hoatdong',$data);
    }


    // danh sach hoat dong
    public function getdanhmuchoatdong(){
    	$data['danhmuchoatdong'] = danhmuc_hoatdong::all();
    	return view('admin.danhmuchoatdong.danhmuchoatdong',$data);
    }
    public function postdanhmuchoatdong(Request $request){
    	$this->validate($request,[
    		'ten'=>'required|unique:danhmuc_hoatdong,ten'
    	],[
    		'ten.required'=>'Không được để trống',
    		'ten.unique'=>'Tên bị trùng',
    	]);
    	$danhmuchoatdong = new danhmuc_hoatdong;
    	$danhmuchoatdong->ten = $request->ten;
    	$danhmuchoatdong->tenkhongdau = str_slug($request->ten);
    	$danhmuchoatdong->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsuadanhmuchoatdong($id){
    	$data['danhmuchoatdong'] = danhmuc_hoatdong::find($id);
    	return view('admin.danhmuchoatdong.sua',$data);
    }

    public function postsuadanhmuchoatdong(Request $request,$id){
    	$this->validate($request,[
    		'ten'=>'required|unique:danhmuc_hoatdong,ten'
    	],[
    		'ten.required'=>'Không được để trống',
    		'ten.unique'=>'Tên bị trùng',
    	]);
    	$danhmuchoatdong = danhmuc_hoatdong::find($id);
    	$danhmuchoatdong->ten = $request->ten;
    	$danhmuchoatdong->tenkhongdau = str_slug($request->ten);
    	$danhmuchoatdong->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoadanhmuchoatdong($id){
    	$danhmuchoatdong = danhmuc_hoatdong::find($id);
    	$danhmuchoatdong->delete();
    	return back()->with('thongbao','Xóa thành công');
    }
    //--
    
}
