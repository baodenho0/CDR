@extends('nguoidung.master')
@section('title','Giới thiệu')
@section('noidung')					
				<div class="col-md-7">
					@foreach ($hoatdong as $hd)
					<div class="box"> 
					<div class="box1">{{$hd->ten}}</div>
					<div class="box2">
					{!!$hd->noidung!!}
					</div>
					</div><br>
					@endforeach
				<div class="link">{{$hoatdong->links()}}</div>
				</div>
@endsection