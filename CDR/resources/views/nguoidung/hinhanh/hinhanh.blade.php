@extends('nguoidung.master')
@section('title','Hình ảnh')
@section('noidung')					
				<div class="col-md-7">
					<div class="box"> 
					<div class="box1">HÌNH ẢNH </div>
					<div class="box2">
						<div class="row">
							@foreach ($hinhanh as $ha)
							<div class="col-md-6"><a class="a_none" href="{{ asset('hinh-anh').'/'.$ha->id.'/'.$ha->tenkhongdau }}">{{$ha->ten}}<img width="100%" src="upload/img/@php
									$i=0;
						            foreach ($ha->anh as $a ) {
						                if($i==0)
						                echo $a->anh;
						                $i++;
						            }
								@endphp
								" alt="{{$ha->tenkhongdau}}" class="thumbnail"></a></div>
							@endforeach
						</div>
					</div>
					</div><br>
					
					
				</div>
@endsection