@extends('nguoidung.master')
@section('title','Nội quy')
@section('noidung')					
				<div class="col-md-7">
					<div class="box"> 
					<div class="box1">NỘI QUY</div>
					<div class="box2">
					{!!$noiquy->noidung!!}
					</div>
					</div><br>

					
				</div>
@endsection