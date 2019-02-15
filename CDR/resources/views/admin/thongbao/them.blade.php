@extends("admin.master")
@section("title","Thông báo")
@section("noidung")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thông báo</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm tin tức
						</div>
						@include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<form method="post">
									@csrf()
								<label>Tiêu đề:</label><br>
								<input type="text" name="tieude" required="" class="form-control">
								<label>Nội dung:</label><br>
								
    							 <textarea id="editor" class="ckeditor" name="noidung" required=""></textarea><br>
    							 <input type="submit" class="btn btn-primary"value="Thêm">
								
    							</form>
							</div>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection