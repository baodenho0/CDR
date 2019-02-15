@extends('nguoidung.master')
@section('title','Tin tức')
@section('noidung')					
				<div class="col-md-7">
					@foreach ($tintuc as $tt)
					<div class="box"> 
					<div class="box1">{{$tt->ten}} / {{$tt->created_at}}</div>
					<div class="box2">
					{!!$tt->noidung!!}
					</div>
					</div><br>
					@endforeach
					<div class="link">{{$tintuc->links()}}</div>
				</div>

@endsection