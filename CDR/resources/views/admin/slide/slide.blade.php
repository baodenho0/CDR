@extends('admin.master')
@section('title','Slide')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Slide</h1>

			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Dslide sách ảnh</div>
					@include('errors.note')
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<div class="col-xs-2">
								<a href="{{ asset('admin/slide/them') }}" class="btn btn-primary">Thêm ảnh</a>
								</div>
								<br>
								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="10%">Tiêu đề ảnh</th>
											<th>Ảnh </th>
											<th>Ngày tạo</th>
											<th width="9%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($slide as $tt)
										<tr>
											<td>{{$tt->id}}</td>
											<td>{{$tt->ten}}</td>
											<td><img class="thumbnail" width="300px" src="upload/slide/{{$tt->anh}}"></td>
										
											<td>{{$tt->created_at}}</td>
											<td>
												<a href="{{ asset('admin/slide/sua/'.$tt->id) }}" class="btn btn-warning"><span ></span> Sửa</a>
			                    		<a href="{{ asset('admin/slide/xoa/'.$tt->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span ></span> Xóa</a>
											</td>

										</tr>
										@endforeach
									</tbody>
								</table>
						
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection