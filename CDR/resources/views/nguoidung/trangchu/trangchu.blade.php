@extends('nguoidung.master')
@section('title','Trang chủ')
@section('noidung')
<div class="col-md-7">
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							@foreach ($slide as $sl)
								<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
							@endforeach
							
							
						</ol>
						<div class="carousel-inner">
							@php
								$i=0;
							@endphp
							@foreach ($slide as $sl)
							<div class="item 
							@if ($i == 0)
								active
							@endif
							@php
								$i++;
							@endphp
							">
								<img alt="{{$sl->ten}}" src="upload/slide/{{$sl->anh}}">
								<div class="container">
									<div class="carousel-caption">
										<h3>{{$sl->ten}}</h3>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div><br>


					<div class="box"> 
					<div class="box1"><a href="{{ asset('tin-tuc') }}">BẢNG TIN</a></div>
					<div class="box2">
					<h5><strong>{{$tintuc->ten}}</strong></h5>
					{!!$tintuc->noidung!!}
					</div>
					</div><br>

					<div class="box"> 
					<div class="box1"><a href="{{ asset('hoat-dong').'/'.$hoatdong->id.'/'.$hoatdong->tenkhongdau }}">HOẠT ĐỘNG</a></div>
					<div class="box2">
					<h5><strong>{{$hoatdong->ten}}</strong></h5>
					{!!$hoatdong->noidung!!}
					</div>
					</div><br>

					

				</div>
				
@endsection