@extends('admin.master')
@section('title','SEO')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">SEO</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa seo
						</div>
						<div class="panel-body">
							@include('errors.note')
        	<form method="post">
        		@csrf()
            	<div class="form-group">
                	<label>Từ khóa</label>
                    <input type="text" name="tukhoa" class="form-control" placeholder="" required value="{{$seo->tukhoa}}" />
                </div>
                <div class="form-group">
                	<label>Mô tả</label>
                    <input type="text" name="mota" class="form-control" placeholder="" required value="{{$seo->mota}}"/>
                </div>
                
                
                <input type="submit"  value="Cập nhật" class="btn btn-primary" />
            </form>
						</div>
					</div>
			</div>
			
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection




