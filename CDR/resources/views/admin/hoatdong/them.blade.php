@extends("admin.master")
@section("title","Hoạt động")
@section("noidung")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Hoạt động</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm hoạt động
						</div>
						@include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<form method="post">
									@csrf()
								<label>Tiêu đề:</label><br>
								<input type="text" name="tieude" required="" class="form-control">
								<label>Nội dung:</label><br>
								@include('ckfinder::setup')
    							 <textarea id="editor"  name="noidung" required=""></textarea><br>
    							 <label>Hoạt động:</label><br>
    							 <select name="danhmuc" class="form-control" >
    							 	@foreach ($danhmuchoatdong as $dm)
    							 		<option value="{{$dm->id}}">{{$dm->ten}}</option>
    							 	@endforeach
									
									
								</select><br>
    							 <input type="submit" class="btn btn-primary"value="Thêm">
								@include('script')
								
    							</form>
							</div>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection