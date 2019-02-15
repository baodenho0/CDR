<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<base href="{{ asset('layouts') }}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
<link rel="stylesheet" href="css/icon.css">

{{-- // --}}

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ asset('admin/trang-chu') }}">Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{Auth::user()->name}}<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ asset('admin/doi-mat-khau') }}"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Đỗi mật khẩu</a></li>
							<li><a href="{{ asset('admin/dang-xuat') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li ><a href="{{ asset('admin/trang-chu') }}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="{{ asset('admin/gioi-thieu') }}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Giới thiệu</a></li>
			<li role="presentation" ></li>
			<li><a href="{{ asset('admin/nhiem-vu-chuc-nang') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Nhiệm vụ chức năng</a></li>
			<li><a href="{{ asset('admin/co-cau-to-chuc') }}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Cơ cấu tổ chức</a></li>
			<li role="presentation" ></li>
			<li><a href="{{ asset('admin/noi-quy') }}"><svg class="glyph stroked paperclip"><use xlink:href="#stroked-paperclip"></use></svg>Nội quy</a></li>
			<li role="presentation" ></li>
			<li><a href="{{ asset('admin/co-so-vat-chat') }}"><svg class="glyph stroked film"><use xlink:href="#stroked-film"></use></svg>Cơ sở vật chất</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="{{ asset('admin/dao-tao') }}"><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"></use></svg>Đào tạo</a></li>
			<li><a href="{{ asset('admin/hoat-dong') }}"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg>Hoạt động</a></li>
			<li><a href="{{ asset('admin/tin-tuc') }}"><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"></use></svg>Tin tức</a></li>
			<li><a href="{{ asset('admin/lien-he') }}"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"></use></svg>Liên hệ</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="{{ asset('admin/thong-bao') }}"><svg class="glyph stroked sound on"><use xlink:href="#stroked-sound-on"></use></svg>Thông báo</a></li>
			<li><a href="{{ asset('admin/anh') }}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"></use></svg>Hình ảnh</a></li>
			<li><a href="{{ asset('admin/ket-noi') }}"><svg class="glyph stroked desktop computer and mobile"><use xlink:href="#stroked-desktop-computer-and-mobile"></use></svg>Kết nối</a></li>

		</ul>
		
	</div><!--/.sidebar-->
		
	@yield('noidung')
		  
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	@yield('script')
</body>

</html>
