<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix' => 'admin','middleware'=>'checkdangxuat'], function() {
    //
    Route::get('trang-chu', 'trangchuController@gettrangchu');
    //--
    Route::get('bo-cuc', 'trangchuController@getbocuc');
    Route::post('bo-cuc', 'trangchuController@postbocuc');
    Route::get('slide', 'trangchuController@getslide');
    Route::get('slide/them', 'trangchuController@getthemslide');
    Route::post('slide/them', 'trangchuController@postthemslide');
    Route::get('slide/sua/{id}', 'trangchuController@getsuaslide');
    Route::post('slide/sua/{id}', 'trangchuController@postsuaslide');
    Route::get('slide/xoa/{id}', 'trangchuController@getxoaslide');
    Route::get('seo','trangchuController@getseo');
    Route::post('seo','trangchuController@postseo');
    Route::get('messengerFB','trangchuController@getfb');
    Route::post('messengerFB','trangchuController@postfb');
    Route::get('icon','trangchuController@geticon');
    Route::post('icon','trangchuController@posticon');
    //--
    Route::get('gioi-thieu','gioithieuController@getgioithieu');
    Route::post('gioi-thieu','gioithieuController@postgioithieu');
    Route::get('nhiem-vu-chuc-nang','nhiemvuchucnangController@getnhiemvuchucnang');
    Route::post('nhiem-vu-chuc-nang','nhiemvuchucnangController@postnhiemvuchucnang');
    Route::get('co-cau-to-chuc','cocautochucController@getcocautochuc');
    Route::post('co-cau-to-chuc','cocautochucController@postcocautochuc');
    Route::get('noi-quy','noiquyController@getnoiquy');
    Route::post('noi-quy','noiquyController@postnoiquy');
    Route::get('co-so-vat-chat','cosovatchatController@getcosovatchat');
    Route::post('co-so-vat-chat','cosovatchatController@postcosovatchat');
    //
    Route::get('dao-tao', 'daotaoController@getdaotao');
    Route::post('dao-tao', 'daotaoController@postdaotao');
    Route::get('tin-tuc','tintucController@gettintuc');
    Route::get('tin-tuc/them','tintucController@getthem');//them tin tuc
    Route::post('tin-tuc/them','tintucController@postthem');//them tin tuc
    Route::get('tin-tuc/sua/{id}','tintucController@getsua');//sua tin tuc
    Route::post('tin-tuc/sua/{id}','tintucController@postsua');//sua tin tuc
    Route::get('tin-tuc/xoa/{id}','tintucController@getxoa');//xoa tin tuc
    Route::post('tin-tuc/tim-kiem', 'tintucController@posttimkiem'); // tim kiem tin tuc
    Route::get('hoat-dong','hoatdongController@gethoatdong');
    Route::get('hoat-dong/them','hoatdongController@getthem');//them hoat dong
    Route::post('hoat-dong/them','hoatdongController@postthem');//them hoat dong
    Route::get('hoat-dong/sua/{id}','hoatdongController@getsua');//sua hoat dong
    Route::post('hoat-dong/sua/{id}','hoatdongController@postsua');//sua hoat dong
    Route::get('hoat-dong/xoa/{id}','hoatdongController@getxoa');//xoa hoat dong
    Route::post('hoat-dong/tim-kiem', 'hoatdongController@posttimkiem'); // tim kiem hoat dong
    // -- danh muc hoat dong
    Route::get('danh-muc-hoat-dong', 'hoatdongController@getdanhmuchoatdong');// get danh muc hoat dong
    Route::post('danh-muc-hoat-dong', 'hoatdongController@postdanhmuchoatdong');// post danh muc hoat dong
    Route::get('danh-muc-hoat-dong/sua/{id}', 'hoatdongController@getsuadanhmuchoatdong');//  sua danh muc hoat dong
    Route::post('danh-muc-hoat-dong/sua/{id}', 'hoatdongController@postsuadanhmuchoatdong');// sua danh muc hoat dong
    Route::get('danh-muc-hoat-dong/xoa/{id}', 'hoatdongController@getxoadanhmuchoatdong');//xoa danh muc hoat dong

    // --
    Route::get('lien-he', 'lienheController@getlienhe');
    Route::post('lien-he', 'lienheController@postlienhe');
    //
    Route::get('thong-bao','thongbaoController@getthongbao');
    Route::get('thong-bao/them','thongbaoController@getthem');//them thong bao
    Route::post('thong-bao/them','thongbaoController@postthem');//them thong bao
    Route::get('thong-bao/sua/{id}','thongbaoController@getsua');//sua thong bao
    Route::post('thong-bao/sua/{id}','thongbaoController@postsua');//sua thong bao
    Route::get('thong-bao/xoa/{id}','thongbaoController@getxoa');//xoa thong bao
    Route::post('thong-bao/tim-kiem', 'thongbaoController@posttimkiem'); // tim kiem thong bao
    //- anh
    Route::get('anh','anhController@getanh');
    Route::get('anh/them','anhController@getthem');//them anh
    Route::post('anh/them','anhController@postthem');//them anh
    Route::get('anh/sua/{id}','anhController@getsua');//sua anh
    Route::post('anh/sua/{id}','anhController@postsua');//sua anh
    Route::get('anh/xoa/{id}','anhController@getxoa');//xoa anh
    Route::post('anh/tim-kiem', 'anhController@posttimkiem'); // tim kiem anh
    // -- danh muc anh
    Route::get('danh-muc-anh', 'anhController@getdanhmucanh');// get danh muc anh
    Route::post('danh-muc-anh', 'anhController@postdanhmucanh');// post danh muc anh
    Route::get('danh-muc-anh/sua/{id}', 'anhController@getsuadanhmucanh');//  sua danh muc anh
    Route::post('danh-muc-anh/sua/{id}', 'anhController@postsuadanhmucanh');// sua danh muc anh
    Route::get('danh-muc-anh/xoa/{id}', 'anhController@getxoadanhmucanh');//xoa danh muc anh
    //-
    Route::get('ket-noi', 'ketnoiController@getketnoi');
    Route::post('ket-noi', 'ketnoiController@postketnoi');
    //
    Route::get('doi-mat-khau', 'trangchuController@getdoimatkhau');
    Route::post('doi-mat-khau', 'trangchuController@postdoimatkhau');
    //
    Route::get('khoi-phuc-mat-khau', 'trangchuController@getkhoiphucmatkhau')->middleware(['can:admin']);

});
Route::group(['prefix' => 'admin/dang-nhap','middleware'=>'checkdangnhap'], function() {
    Route::get('/', 'dangnhapController@getdangnhap');
    Route::post('/', 'dangnhapController@postdangnhap');
});
Route::get('admin/dang-xuat', 'dangnhapController@getdangxuat');

Route::get('/','nguoidungController@gettrangchu');
Route::get('gioi-thieu','nguoidungController@getgioithieu');
Route::get('nhiem-vu-chuc-nang','nguoidungController@getnhiemvuchucnang');
Route::get('co-cau-to-chuc','nguoidungController@getcocautochuc');
Route::get('noi-quy','nguoidungController@getnoiquy');
Route::get('co-so-vat-chat','nguoidungController@getcosovatchat');
// ----
Route::get('dao-tao','nguoidungController@getdaotao');
Route::get('tin-tuc','nguoidungController@gettintuc');
Route::get('lien-he','nguoidungController@getlienhe');
//-hoat dong , 
Route::get('hoat-dong/{id}/{tenkhongdau}', 'nguoidungController@gethoatdong');
Route::get('thong-bao/{id}/{tenkhongdau}', 'nguoidungController@getthongbao');
Route::get('hinh-anh','nguoidungController@gethinhanh');
Route::get('hinh-anh/{id}/{tenkhongdau}','nguoidungController@getanh');



