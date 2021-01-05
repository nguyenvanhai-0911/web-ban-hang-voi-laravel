@extends('pages.layout')
@section('pages_content')

<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Tư Vấn</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Gọi</li>
						<li class="number-phone mt-3">0973797634</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="{{route('pages.home')}}">
							Escanor Shop </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									Giỏ Hàng
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Đăng Nhập</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không chia sẻ email của bạn cho bất kì ai.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Mật Khẩu</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Kiểm Tra Tôi</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Đăng Nhập</button>

								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Bạn muốn tìm gì ?" required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="{{route('pages.home')}}">Trang Chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('pages.about')}}">Giới Thiệu</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Danh Mục
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Danh Mục Sản Phẩm</h5>
											<ul>
                                                @foreach($cate ?? '' as $category)
                                                    <li class="media-mini mt-3">
                                                        <a href="{{route('pages.search_category',$category->id)}}">{{$category->name}}</a>
                                                    </li>
                                                @endforeach
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Danh Mục Sản Phẩm</h5>
											<div class="media-mini mt-3">
                                                <ul>
                                                    @foreach($cate1 ?? '' as $category)
                                                        <li class="media-mini mt-3">
                                                            <a href="{{route('pages.search_category',$category->id)}}">{{$category->name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Danh Mục Sản Phẩm</h5>
											<div class="media-mini mt-3">
                                                @foreach($cate_img ?? '' as $category)
                                                    <a href="{{route('pages.shop')}}">
                                                        <img src="{{asset('public/images/img_category/'.$category->image)}}" class="img-fluid" alt="" style="width: 140px;height: 140px;">
                                                    </a>
                                                @endforeach
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Thương Hiệu
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Thương Hiệu Sản Phẩm </h5>
											<ul>
                                                @foreach($brand ?? '' as $br)
                                                    <li class="media-mini mt-3">
                                                        <a href="{{route('pages.search_brand',$br->id)}}">{{$br->name}}</a>
                                                    </li>
                                                @endforeach

											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Thương Hiệu Sản Phẩm </h5>
											<ul>
                                                @foreach($brand1 ?? '' as $br1)
                                                    <li class="media-mini mt-3">
                                                        <a href="{{route('pages.search_brand',$br1->id)}}">{{$br1->name}}</a>
                                                    </li>
                                                @endforeach
											</ul>
											<ul class="sub-in text-left">
											</ul>

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Thương Hiệu Sản Phẩm </h5>
											<div class="media-mini mt-3">
												@foreach($brand_img ?? '' as $br_img)
                                                    <a href="{{route('pages.search_brand',$br_img->id)}}">
                                                        <img src="{{asset('public/images/img_brand/'.$br_img->image)}}" class="img-fluid" alt="" style="width: 140px;height: 140px;" >
                                                    </a>
                                                @endforeach
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('pages.contact')}}">Liên Hệ</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner -->
        @yield('pages_banner')

</div>

<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="{{route('pages.home')}}">Home</a>
							<i>|</i>
						</li>
						<li>About Us</li>
					</ul>
				</div>
			</div>

</div>

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="error_page">
				<h4>404</h4>
				<p>Xin lỗi hiện chưa có tính năng này</p>
				<form action="{{route('pages.404')}}" method="PUT">
					<input class="serch" type="search" name="serch" placeholder="Tìm Kiếm Tại Đây" required="">
					<button class="btn1">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
					<div class="clearfix"> </div>
				</form>
				<ul class="footer-social text-center mt-lg-4 mt-3">

					<li class="mx-2">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-google-plus-g"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-linkedin-in"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fas fa-rss"></span>
						</a>
					</li>
					<li class="mx-2">
						<a href="#">
							<span class="fab fa-vk"></span>
						</a>
					</li>
				</ul>
				<a class="b-home" href="{{route('pages.home')}}">Về Trang Chủ</a>
			</div>

		</div>
</section>

@endsection
