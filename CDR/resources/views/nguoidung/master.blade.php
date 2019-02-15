<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="{{$seo->mota}}">
  		<meta name="keywords" content="{{$seo->tukhoa}}">
		<title>@yield('title')</title>

		<!-- Bootstrap CSS -->
		<base href="{{ asset('layouts') }}/">
		<link rel="icon" href="upload/icon/{{$icon->icon}}">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container">
			<div class="row">
			<div class="header" >
				<div>
					<img src="upload/header/{{$bocuc->header}}" alt="{{$bocuc->header}}" width="100%">
				</div>
				<div>
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="{{ asset('/') }}">Trang chủ</a>
							</div>
					
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">
									
									<li><a href="{{ asset('dao-tao') }}">Đào tạo</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hoạt động <b class="caret"></b></a>
										<ul class="dropdown-menu">
											@foreach ($danhmuchoatdong as $dmhd)
												<li><a href="{{ asset('hoat-dong').'/'.$dmhd->id.'/'.$dmhd->tenkhongdau }}">{{$dmhd->ten}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="{{ asset('tin-tuc') }}">Tin tức</a></li>
									<li><a href="{{ asset('lien-he') }}">Liên hệ</a></li>
								</ul>
								
								
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</div>
			</div>
			</div>
			<!-- //end header -->


			<!-- -------- -->
			<div class="content">
				<div class="row">
				<div class="col-md-3">
					<div class="box"> 
					<div class="box1"><a href="{{ asset('gioi-thieu') }}">GIỚI THIỆU</a></div>
					</div><br>

					<div class="box"> 
					<div class="box1"><a href="{{ asset('nhiem-vu-chuc-nang') }}">NHIỆM VỤ CHỨC NĂNG</a></div>
					</div><br>

					<div class="box"> 
					<div class="box1"><a href="{{ asset('co-cau-to-chuc') }}">CƠ CẤU TỔ CHỨC</a></div>
					</div><br>

					<div class="box"> 
					<div class="box1"><a href="{{ asset('noi-quy') }}">NỘI QUY</a></div>
					</div><br>

					<div class="box"> 
					<div class="box1"><a href="{{ asset('co-so-vat-chat') }}">CƠ SỞ VẬT CHẤT</a></div>
					</div><br>
				</div>

				@yield('noidung')

				<div class="col-md-2">
					<div class="box"> 
					<div class="box1 center">THÔNG BÁO</div>
					<div class="box2">
					@foreach ($thongbao as $tb)
					<h5><a href="{{ asset('thong-bao').'/'.$tb->id.'/'.$tb->tenkhongdau }}">- {{$tb->ten}}</a></h5>
					@endforeach
					</div>
					</div><br>

					<div class="box"> 
					<div class="box1 center"><a href="{{ asset('hinh-anh') }}">HÌNH ẢNH</a></div>
			
					</div><br>

					<div class="box"> 
					<div class="box1 center">KẾT NỐI</div>
					<div class="box2 center">
					<a target="_blank" class="icon_a" href="{{$ketnoi->fb}}"><img class="icon" src="img/facebook.png" alt="iconfb"></a>
					<a target="_blank" class="icon_a" href="{{$ketnoi->youtube}}"><img class="icon" src="img/youtube.png" alt="iconyoutube"></a>
					<h5 class="px17"><strong><span class="glyphicon glyphicon-phone-alt"></span> {{$ketnoi->sdt}}</strong></h5>
					
					</div>
					</div><br>
				</div>
				</div>
			</div>
			<!-- ---------- -->

			



		</div>
		<div class="container footer1" >{!!$bocuc->footer!!}</div>
		


		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/index.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
		{!!$fb->link!!}
	</body>
</html>