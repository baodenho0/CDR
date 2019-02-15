@extends('admin.master')
@section('title','Hoạt động')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Hoạt động</h1>

			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách hoạt động</div>
					@include('errors.note')
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<div class="col-xs-2">
								<a href="{{ asset('admin/hoat-dong/them') }}" class="btn btn-primary">Thêm hoạt động</a>
								</div>
								<div class="col-xs-3">
								<a href="{{ asset('admin/danh-muc-hoat-dong') }}" class="btn btn-danger">Danh mục hoạt động</a>
								</div>
								
								<form  action="{{ asset('admin/hoat-dong/tim-kiem') }}" method="post">
								@csrf()
								<div class="col-xs-4">
								<input type="text" class="form-control" name="timkiem" placeholder="Tiêu đề tìm kiếm...">
								</div>
								<div class="col-xs-2">
								<div class="row">
								<input type="submit" class="btn btn-success" value="Tìm kiếm">
								</div>
								</form>
								</div>
								<div class="col-xs-1"><div class="row"><a href="{{ asset('admin/hoat-dong') }}" class="btn btn-info ">Làm mới</a></div></div>
								<br>
								
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="10%">Tiêu đề</th>
											<th>Nội dung </th>
											<th>Hoạt động </th>
											<th>Ngày tạo </th>
											<th width="13%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($hoatdong as $tt)
										<tr>
											<td>{{$tt->id}}</td>
											<td>{{$tt->ten}}</td>
											<td>{!!$tt->noidung!!}</td>
											<td>{{$tt->danhmuc_hoatdong->ten}}</td>
											<td>{{$tt->created_at}}</td>
											<td>
												<a href="{{ asset('admin/hoat-dong/sua/'.$tt->id) }}" class="btn btn-warning"><span ></span> Sửa</a>
			                    		<a href="{{ asset('admin/hoat-dong/xoa/'.$tt->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span ></span> Xóa</a>
											</td>

										</tr>
										@endforeach
									</tbody>
								</table>
							{{$hoatdong->links()}}

							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection