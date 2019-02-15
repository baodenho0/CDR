@extends('nguoidung.master')
@section('title','Hình ảnh')
@section('noidung')					
				<div class="col-md-7">
					<div class="box"> 
					<div class="box1">HÌNH ẢNH</div>
					<div class="box2">
						<div class="row">
							@foreach ($anh as $a)
							<div class="get_img" data-toggle="modal" data-target="#myModal">
							<div class="col-md-6 col-sm-6">
								
								<div class="get_ten hidden">{{$a->ten}}</div>
								<img width="100%"  src="upload/img/{{$a->anh}}" alt="{{$a->ten}}" class="thumbnail get_img img">

							</div>
							</div>
							@endforeach
						</div>
					</div>
					</div><br>
					
				<div class="link">{{$anh->links()}}</div>
					{{-- show dialog	 --}}
					<div class="container">
						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog modal-lg">
								<div class="modal-content load">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title load_ten">Modal Header</h4>
									</div>
									<div class="modal-body">
										<img class="load_img" width="100%" src="" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- // --}}
				</div>
			
@endsection
