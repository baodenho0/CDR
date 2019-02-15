<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\anh;
use App\danhmuc_anh;

class anhController extends Controller
{
    //
    public function getanh(){
    	$data['anh'] = anh::orderBy('id','desc')->paginate(5);
    	$data['danhmucanh'] = danhmuc_anh::all();
    	return view('admin.anh.anh',$data);
    }

    public function getthem(){
    	$data['danhmucanh'] = danhmuc_anh::all();
    	return view('admin.anh.them',$data);
    }
    public function postthem(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required|unique:anh,ten',
    		'img'=>'required|mimes:jpg,jpeg,png',
    		'danhmuc'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'img.required'=>'Chưa có ảnh',
    		'img.mimes'=>'Chỉ được tải ảnh',
    		'danhmuc.required'=>'Chưa có danh mục',
    	]);
    	$anh = new anh;
    	$anh->ten = $request->tieude;
    	$anh->id_danhmuc = $request->danhmuc;
    	// --- upload anh
    	$hinhanh = $request->file('img');
		$hinhanh_name = str_random(10)."-".$hinhanh->getClientOriginalName();
		$hinhanh->move('layouts/upload/img',$hinhanh_name);
		$anh->anh = $hinhanh_name;
		// --- 
    	$anh->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsua($id){
    	$data['anh'] = anh::find($id);
    	$data['danhmucanh'] = danhmuc_anh::all();
    	return view('admin.anh.sua',$data);

    }

    public function postsua(Request $request,$id){
    	$this->validate($request,[
    		'tieude'=>'required|unique:anh,ten,'.$id.',id',
    		'img'=>'mimes:jpg,jpeg,png',
    		'danhmuc'=>'required',
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'img.mimes'=>'Chỉ được tải ảnh',
    		'danhmuc.required'=>'Chưa có danh mục',
    	]);
    	$anh = anh::find($id);
    	$anh->ten = $request->tieude;
    	$anh->id_danhmuc = $request->danhmuc;
    	// --- upload anh
    	if($request->hasFile('img')){
		$hinhanh = $request->file('img');
		$hinhanh_name = str_random(10)."-".$hinhanh->getClientOriginalName();
		unlink('layouts/upload/img/'.$anh->anh);
		$hinhanh->move('layouts/upload/img',$hinhanh_name);
		$anh->anh = $hinhanh_name;
		}
		// --- 
    	$anh->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoa($id){
    	$anh = anh::find($id);
    	unlink('layouts/upload/img/'.$anh->anh);
    	$anh->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    public function posttimkiem(Request $request){
        $tim = $request->timkiem;
        $data['anh'] = anh::where('ten','like',"%$tim%")->paginate(5);
        return view('admin.anh.anh',$data);
    }


    // danh sach anh
    public function getdanhmucanh(){
    	$data['danhmucanh'] = danhmuc_anh::all();
    	return view('admin.danhmucanh.danhmucanh',$data);
    }
    public function postdanhmucanh(Request $request){
    	$this->validate($request,[
    		'ten'=>'required|unique:danhmuc_anh,ten'
    	],[
    		'ten.required'=>'Không được để trống',
    		'ten.unique'=>'Tên bị trùng',
    	]);
    	$danhmucanh = new danhmuc_anh;
    	$danhmucanh->ten = $request->ten;
    	$danhmucanh->tenkhongdau = str_slug($request->ten);
    	$danhmucanh->save();
    	return back()->with('thongbao','Thêm thành công');
    }

    public function getsuadanhmucanh($id){
    	$data['danhmucanh'] = danhmuc_anh::find($id);
    	return view('admin.danhmucanh.sua',$data);
    }

    public function postsuadanhmucanh(Request $request,$id){
    	$this->validate($request,[
    		'ten'=>'required|unique:danhmuc_anh,ten'
    	],[
    		'ten.required'=>'Không được để trống',
    		'ten.unique'=>'Tên bị trùng',
    	]);
    	$danhmucanh = danhmuc_anh::find($id);
    	$danhmucanh->ten = $request->ten;
    	$danhmucanh->tenkhongdau = str_slug($request->ten);
    	$danhmucanh->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    public function getxoadanhmucanh($id){
    	$danhmucanh = danhmuc_anh::find($id);
    	$danhmucanh->delete();
    	return back()->with('thongbao','Xóa thành công');
    }
    //--
}
