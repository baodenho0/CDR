@extends('admin.master')
@section('title','Trang chủ')
@section('noidung')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang chủ</h1>
			</div>
		</div><!--/.row-->
									
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$danhmuc_hoatdong->count()}}</div>
							<div class="text-muted">Danh mục hoạt động</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$hoatdong->count()}}</div>
							<div class="text-muted">Hoạt động</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$tintuc->count()}}</div>
							<div class="text-muted">Tin tức</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left thongbao">
							<svg class="glyph stroked sound on"><use xlink:href="#stroked-sound-on"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$thongbao->count()}}</div>
							<div class="text-muted">Thông báo</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left hinhanh">
							<svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$anh->count()}}</div>
							<div class="text-muted">Hình ảnh</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel luottruycap panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked download"><use xlink:href="#stroked-download"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">10</div>
							<div class="text-muted">Lượt truy cập</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<a href="{{ asset('admin/bo-cuc') }}">
					<div class="panel capnhatbocuc panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$bocuc}}</div>
							<div class="text-muted">Cập nhật bố cục</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<a href="{{ asset('admin/slide') }}">
					<div class="panel slide panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked video"><use xlink:href="#stroked-video"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$slide->count()}}</div>
							<div class="text-muted">Slide</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<a href="{{ asset('admin/seo') }}">
					<div class="panel seo panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked wireless router"><use xlink:href="#stroked-wireless-router"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"></div>
							<div class="text-muted">Seo</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<a href="{{ asset('admin/messengerFB') }}">
					<div class="panel fb panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"></div>
							<div class="text-muted">Messenger FB</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<a href="{{ asset('admin/icon') }}">
					<div class="panel icon panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"></div>
							<div class="text-muted">Icon</div>
						</div>
					</div>
				</div>
				</a>
			</div>
		</div><!--/.row-->
		
		
	</div>	<!--/.main-->
@endsection