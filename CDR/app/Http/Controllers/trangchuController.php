<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\bocuc;
use App\slide;
use App\thongbao;
use App\anh;
use App\tintuc;
use App\hoatdong;
use App\danhmuc_hoatdong;
use App\seo;
use App\fb;
use App\icon;
use App\user;
use Carbon\Carbon;
use Auth;

class trangchuController extends Controller
{
    //
    public function gettrangchu(bocuc $post){
    	$data['danhmuc_hoatdong'] = danhmuc_hoatdong::all();
    	$data['hoatdong'] = hoatdong::all();
    	$data['tintuc'] = tintuc::all();
    	$data['anh'] = anh::all();
    	$data['thongbao'] = thongbao::all();
    	$data['slide'] = slide::all();
    	$bc = bocuc::first();
    	$data['bocuc'] = $bc->updated_at->toDateString();
        // visits($post)->increment();
        
    	return view('admin.trangchu.trangchu',$data);
    }

    public function getbocuc(){
    	$data['bocuc'] = bocuc::first();
    	return view('admin.bocuc.bocuc',$data);
    }

    public function postbocuc(Request $request){
    	$this->validate($request,[
    		'header'=>'mimes:jpg,jpeg,png',
    		'footer'=>'required',
    	],[
    		'header.mimes'=>'Chỉ được tải ảnh',
    		'footer.required'=>'Chưa có Footer',
    	]);
    	$bocuc = bocuc::first();
    	$bocuc->footer = $request->footer;
    	// --- upload bocuc
    	if($request->hasFile('header')){
		$hinhbocuc = $request->file('header');
		$hinhbocuc_name = str_random(10)."-".$hinhbocuc->getClientOriginalName();
		unlink('layouts/upload/header/'.$bocuc->header);
		$hinhbocuc->move('layouts/upload/header',$hinhbocuc_name);
		$bocuc->header = $hinhbocuc_name;
		}
		// --- 
    	$bocuc->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }

    // silde
    public function getslide(){
    	$data['slide'] = slide::all();
    	return view('admin.slide.slide',$data);
    }
    public function getthemslide(){
    	return view('admin.slide.them');
    }
    public function postthemslide(Request $request){
    	$this->validate($request,[
    		'tieude'=>'required|unique:slide,ten',
    		'slide'=>'required|mimes:jpg,jpeg,png',
    		
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'slide.required'=>'Chưa có ảnh',
    		'slide.mimes'=>'Chỉ được tải ảnh',
    		
    	]);
    	$slide = new slide;
    	$slide->ten = $request->tieude;
    	
    	// --- upload slide
    	$hinhslide = $request->file('slide');
		$hinhslide_name = str_random(10)."-".$hinhslide->getClientOriginalName();
		$hinhslide->move('layouts/upload/slide',$hinhslide_name);
		$slide->anh = $hinhslide_name;
		// --- 
    	$slide->save();
    	return back()->with('thongbao','Thêm thành công');
    }
    public function getsuaslide($id){
    	$data['slide'] = slide::find($id);
    	return view('admin.slide.sua',$data);
    }
    public function postsuaslide(Request $request,$id){
    	$this->validate($request,[
    		'tieude'=>'required|unique:slide,ten,'.$id.',id',
    		'slide'=>'mimes:jpg,jpeg,png',
    		
    	],[
    		'tieude.required'=>'Chưa có tiêu đề',
    		'tieude.unique'=>'Tiêu đề đã tồn tại',
    		'slide.mimes'=>'Chỉ được tải ảnh',
    	
    	]);
    	$slide = slide::find($id);
    	$slide->ten = $request->tieude;
    	// --- upload slide
    	if($request->hasFile('slide')){
		$hinhslide = $request->file('slide');
		$hinhslide_name = str_random(10)."-".$hinhslide->getClientOriginalName();
		unlink('layouts/upload/slide/'.$slide->anh);
		$hinhslide->move('layouts/upload/slide',$hinhslide_name);
		$slide->anh = $hinhslide_name;
		}
		// --- 
    	$slide->save();
    	return back()->with('thongbao','Cập nhật thành công');
    }
    public function getxoaslide($id){
    	$slide = slide::find($id);
    	unlink('layouts/upload/slide/'.$slide->anh);
    	$slide->delete();
    	return back()->with('thongbao','Xóa thành công');
    }

    public function getseo(){
        $data['seo'] = seo::first();
        return view('admin.seo.seo',$data);
    }

    public function postseo(Request $request){
        $this->validate($request,[
            'tukhoa' =>'required',
            'mota' =>'required',
        ],[
            'tukhoa.required' => 'Chưa có từ khóa',
            'mota.required' => 'Chưa có mô tả',
        ]);
        $seo = seo::first();
        $seo->tukhoa = $request->tukhoa;
        $seo->mota = $request->mota;
        $seo->save();
        return back()->with('thongbao','Cập nhật thành công');
    }

    public function getfb(){
        $data['fb'] = fb::first();
        return view('admin.fb.fb',$data);
    }

    public function postfb(Request $request){
        $fb = fb::first();
        $fb->link = $request->link;
        $fb->save();
        return back()->with('thongbao','Cập nhật thành công');
    }

    public function geticon(){
        $data['icon'] = icon::first();
        return view('admin.icon.icon',$data);
    }
    public function posticon(Request $request){
        $icon = icon::first();
       // --- upload icon
        if($request->hasFile('icon')){
        $hinhicon = $request->file('icon');
        $hinhicon_name = $hinhicon->getClientOriginalName();
        unlink('layouts/upload/icon/'.$icon->icon);
        $hinhicon->move('layouts/upload/icon',$hinhicon_name);
        $icon->icon = $hinhicon_name;
        }
        // --- 
        $icon->save();
        return back()->with('thongbao','Cập nhật thành công');
    }

    public function getdoimatkhau(){
        return view('admin.doimatkhau.doimatkhau');
    }
    public function postdoimatkhau(Request $request){
        $this->validate($request,[
            'matkhaucu'=>'required',
            'matkhaumoi'=>'required',
            'nhaplai'=>'required|same:matkhaumoi',
        ],[
            'matkhaucu.required'=>'Chưa nhập mật khẩu cũ',
            'matkhaumoi.required'=>'Chưa nhập mật khẩu mới',
            'nhaplai.required'=>'Chưa nhập lại mật khẩu mới',
            'nhaplai.same'=>'Mật khẩu không trùng khớp',
        ]);
        if(Auth::attempt(['name'=>Auth::user()->name,'password'=>$request->matkhaucu])){
            $taikhoan = user::find(Auth::user()->id);
            $taikhoan->password = bcrypt($request->matkhaumoi);
            $taikhoan->save();
            return back()->with('thongbao','Đổi mật khẩu thành công');
            
        }
        else{
            return back()->with('error','Sai mật khẩu cũ');
        }
    }

    public function getkhoiphucmatkhau(){
        $taikhoan = user::first();
        $taikhoan->password = bcrypt('admin');
        $taikhoan->save();
        return redirect('admin/trang-chu');
    }

}
