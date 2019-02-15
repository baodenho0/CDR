@extends('admin.master')
@section('title','Kết nối')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kết nối</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa kết nối
						</div>
						<div class="panel-body">
							@include('errors.note')
        	<form method="post">
        		@csrf()
            	<div class="form-group">
                	<label>Link FB</label>
                    <input type="text" name="fb" class="form-control" placeholder="http://fb.com/..." required value="{{$ketnoi->fb}}" />
                </div>
                <div class="form-group">
                	<label>Link youtube</label>
                    <input type="text" name="youtube" class="form-control" placeholder="http://youtube.com/..." required value="{{$ketnoi->youtube}}"/>
                </div>
                <div class="form-group">
                	<label>Số điện thoại</label>
                    <input type="number" name="sdt" class="form-control" placeholder="0..." required value="{{$ketnoi->sdt}}"/>
                </div>
                
                <input type="submit"  value="Cập nhật" class="btn btn-primary" />
            </form>
						</div>
					</div>
			</div>
			
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection




