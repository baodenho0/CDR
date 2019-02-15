<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use user;

class dangnhapController extends Controller
{
    //
    public function getdangnhap(){
    	return view('admin.dangnhap.dangnhap');
    }

    public function postdangnhap(Request $request){
    	$lg  = ['name'=>$request->name,'password'=>$request->password];
    	if($request->remember = "Remember Me"){
            $remember = true;
        }
        else{
            $remember = false;
        }
    	if(Auth::attempt($lg,$remember)){
    		return redirect('admin/trang-chu');
    	}
    	else return back()->with('error','Đăng nhập thất bại');

    }

    public function getdangxuat(){
    	Auth::logout();
        return redirect('admin/dang-nhap');
    }
}
