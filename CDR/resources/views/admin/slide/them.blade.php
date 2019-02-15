@extends("admin.master")
@section("title","Hình ảnh")
@section("noidung")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Hình ảnh</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm ảnh
						</div>
						@include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<form method="post" enctype="multipart/form-data">
									@csrf()
								<label>Tiêu đề:</label><br>
								<input type="text" name="tieude" required=""  class="form-control">
								<div class="form-group" >
										<label>Ảnh:</label>
										<input required id="img" type="file" name="slide" accept="image/*" class="hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
								</div>
								
    							<input type="submit" class="btn btn-primary"value="Thêm">
    							<a href="{{ asset('admin/slide') }}" class="btn btn-danger">Hủy bỏ</a>
								</form>
							</div>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection
@section('script')
<script>
		function changeImg(input){
		   if(input.files && input.files[0]){
		        var reader = new FileReader();
		         reader.onload = function(e){
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>
@endsection
