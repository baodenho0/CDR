@extends('admin.master')
@section('title','Đổi mật khẩu')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Mật khẩu</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Đổi mật khẩu
				</div>
				<div class="panel-body">
					@include('errors.note')
					<form method="post">
						@csrf()
						<div class="form-group">
							<label>Mật khẩu cũ</label>
							<input type="password" name="matkhaucu" class="form-control"  required />
						</div>
						<div class="form-group">
							<label>Mật khẩu mới</label>
							<input type="password" name="matkhaumoi" class="form-control" required/>
						</div>
						<div class="form-group">
							<label>Nhập lại mật khẩu mới</label>
							<input type="password" name="nhaplai" class="form-control"  required />
						</div>

						<input type="submit"  value="Xác nhận" class="btn btn-primary" />
						@can('admin')
						<a class="btn btn-danger" href="{{ asset('admin/khoi-phuc-mat-khau') }}">Khôi phục mật khẩu</a>
						@endcan
					</form>

				</div>
			</div>
		</div>

	</div><!--/.row-->
</div>	<!--/.main-->
@endsection




