<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Escanor Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('public/asset/admin/assets/images/favicon.png')!!}">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{!! asset('public/pages/css/bootstrap.css')!!}" rel='stylesheet' type='text/css' />
	<link href="{!! asset('public/pages/css/login_overlay.css')!!}" rel='stylesheet' type='text/css' />
	<link href="{!! asset('public/pages/css/style6.css')!!}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{!! asset('public/pages/css/shop.css')!!}" type="text/css" />
	<link href="{!! asset('public/pages/css/contact.css')!!}" rel='stylesheet' type='text/css' />
	<link href="{!! asset('public/pages/css/style.css')!!}" rel='stylesheet' type='text/css' />
	<link href="{!! asset('public/pages/css/fontawesome-all.css')!!}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
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
                                                        <img src="{{asset('public/images/img_brand/'.$br_img->image)}}" class="img-fluid" alt="" style="width: 140px;height: 140px;">
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
		<!-- banner -->
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
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Liên Hệ</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Chúng tôi đánh giá cao sự góp ý của bạn</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Địa Chỉ</h6>
								<p> Hồ Chí Minh, Việt Nam</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com">vanhai0911@gmail.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Số Điện Thoại</h6>
								<p>+84 973 7976 34</p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<form action="{{route('pages.404')}}" method="PUT">
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Họ Tên</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="Email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="my-2">Vấn Đề</label>
									<input class="form-control" type="text" name="Subject" placeholder="" required="">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Mô Tả</label>
									<textarea id="textarea" placeholder="" required=""></textarea>
								</div>
								<input class="form-control" type="submit" value="Gởi">

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>

	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Về Chúng Tôi</h3>
					</div>
					<div class="footer-text">
						<p>Escanor Shop ra đời vào năm 2018.Được biết đến là cửa hàng bán lẻ uy tín và chất lượng tại Việt Nam.
                        Chúng tôi luôn cố gắng đem lại những sản phẩm mới nhất và tốt nhất cho khách hàng.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="https://www.facebook.com/nguyenvanhai.0911/">
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
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Liên Lạc</h3>
					</div>
					<div class="contact-info">
						<h4>Vị trí :</h4>
						<p>số 01-đường Phạm Văn Đồng-phường Hiệp Bình Chánh-quận Thủ Đức-tp.HCM.</p>
						<div class="phone">
							<h4>Liên Hệ :</h4>
							<p>SĐT : +84 97 379 7634</p>
							<p>Facebook :
								<a href="https://www.facebook.com/nguyenvanhai.0911/">Nguyễn Văn Hải</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Liên Kết Nhanh</h3>
					</div>
					<ul class="links">
						<li>
							<a href="{{route('pages.home')}}">Trang Chủ</a>
						</li>
						<li>
							<a href="{{route('pages.about')}}">Giới Thiệu</a>
						</li>
						<li>
							<a href="{{route('pages.shop')}}">Sản Phẩm</a>
						</li>
						<li>
							<a href="#">Liên Hệ</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Đăng Ký Nhận Ưu Đãi</h3>
					</div>
					<div class="footer-text">
						<p>Đăng ký nhận thông báo để có thể cập nhật những ưu đãi mới nhất của chúng tôi.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Nhập email tại đây..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="{!! asset('public/pages/js/jquery-2.2.3.min.js')!!}"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="{!! asset('public/pages/js/modernizr-2.6.2.min.js')!!}"></script>
	<script src="{!! asset('public/pages/js/classie-search.js')!!}"></script>
	<script src="{!! asset('public/pages/js/demo1-search.js')!!}"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="{!! asset('public/pages/js/minicart.js')!!}"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<script src="{!! asset('public/pages/js/move-top.js')!!}"></script>
    <script src="{!! asset('public/pages/js/easing.js')!!}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear'
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="{!! asset('public/pages/js/bootstrap.js')!!}"></script>
	<!-- js file -->
</body>

</html>
