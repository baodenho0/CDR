@extends('nguoidung.master')
@section('title','Thông báo')
@section('noidung')					
				<div class="col-md-7">
					<div class="box"> 
					<div class="box1">{{$thongbao1->ten}} / {{$thongbao1->created_at}}</div>
					<div class="box2">
					{!!$thongbao1->noidung!!}
					</div>
					</div><br>
					
					
				</div>

@endsection