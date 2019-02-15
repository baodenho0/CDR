@extends('nguoidung.master')
@section('title','Giới thiệu')
@section('noidung')					
				<div class="col-md-7">
					<div class="box"> 
					<div class="box1">GIỚI THIỆU</div>
					<div class="box2">
					{!!$gioithieu->noidung!!}
					</div>
					</div><br>

					
				</div>
@endsection