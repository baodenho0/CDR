@extends('admin.master')
@section('title','Danh mục')
@section('noidung')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						@include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<label>Tên danh mục:</label>
								<form method="post">
									@csrf()
    							<input type="text" required="" name="ten" class="form-control" placeholder="Tên danh mục...">
    							<br><input type="submit" class="form-control btn btn-primary" value="Thêm danh mục">
    							</form>
							</div>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach ($danhmuchoatdong as $dm)
				              	<tr>
									<td>{{$dm->ten}}</td>
									<td>
			                    		<a href="{{ asset('admin/danh-muc-hoat-dong/sua/'.$dm->id) }}" class="btn btn-warning"> Sửa</a>
			                    		<a href="{{ asset('admin/danh-muc-hoat-dong/xoa/'.$dm->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"> Xóa</a>
			                  		</td>
			                  	</tr>
			                  		@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop