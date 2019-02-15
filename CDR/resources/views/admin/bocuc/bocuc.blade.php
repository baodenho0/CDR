@extends("admin.master")
@section("title","Bố cục")
@section("noidung")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bố cục</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa bố cục
						</div>
						@include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<form method="post" enctype= multipart/form-data>
									@csrf()
								<label>Header:</label><br>
								<input id="img" type="file" value="" name="header" class="hidden" accept="image/*" onchange="changeImg(this)">
								<img id="avatar" class="thumbnail" width="60%" src="upload/header/{{$bocuc->header}}">
								<label>Footer:</label><br>
    							<textarea class="ckeditor" name="footer" required="">{{$bocuc->footer}}</textarea><br>
    							<input type="submit" class="btn btn-primary"value="Cập nhật">
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