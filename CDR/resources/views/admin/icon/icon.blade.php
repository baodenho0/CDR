@extends("admin.master")
@section("title","Icon")
@section("noidung")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Icon</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa Icon
						</div>
						@include('errors.note')
						<div class="panel-body">
							<div class="form-group">
								<form method="post" enctype="multipart/form-data">
									@csrf()
								<div class="form-group" >
										<label>Ảnh:</label>
										<input  id="img" type="file" name="icon" accept="image/*" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="upload/icon/{{$icon->icon}}">
								</div>
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
