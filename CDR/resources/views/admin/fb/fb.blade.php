@extends('admin.master')
@section('title','MessengerFB')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">MessengerFB</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa link
						</div>
						<div class="panel-body">
							@include('errors.note')
        	<form method="post">
        		@csrf()
            	<div class="form-group">
                	<label>Link FB</label>
                    <input type="text" name="link" class="form-control" placeholder=""  value="{{$fb->link}}" />
                </div>
                
                
                <input type="submit"  value="Cập nhật" class="btn btn-primary" />
            </form>
						</div>
					</div>
			</div>
			
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection




