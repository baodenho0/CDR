@extends("admin.master")
@section("title","Liên hệ")
@section("noidung")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Liên hệ</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa liên hệ
						</div>
						@include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<form method="post">
									@csrf()
								<label>Nội dung:</label><br>
    							 <textarea class="ckeditor" name="mota" required="">{!!$lienhe->noidung!!}</textarea><br>
    							 <input type="submit" class="btn btn-primary"value="Cập nhật">
    							 </form>
							</div>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection