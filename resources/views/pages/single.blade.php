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
	<link rel="stylesheet" href="{!! asset('public/pages/css/owl.carousel.css')!!}" type="text/css" media="all">
	<link rel="stylesheet" href="{!! asset('public/pages/css/owl.theme.css')!!}" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="{!! asset('public/pages/css/jquery-ui1.css')!!}">
	<link href="{!! asset('public/pages/css/easy-responsive-tabs.css')!!}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{!! asset('public/pages/css/flexslider.css')!!}" type="text/css" media="screen" />
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
						<li>Single Page</li>
					</ul>
				</div>
			</div>

		</div>

	</div>
		<!--//banner -->
		<!--/shop-->
        @foreach($product ?? '' as $pro)
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">

											<ul class="slides">
												<li data-thumb="{{asset('public/images/img_product/'.$pro->image)}}">
													<div class="thumb-image"> <img src="{{asset('public/images/img_product/'.$pro->image)}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>{{$pro->name}}</h3>
									<p><span class="item_price">{{number_format($pro->price)}}</span>
										<del>{{$pro->discount}}</del>
									</p>

									<div class="description">
										<h5>Kiểm tra giao hàng và phí vận chuyển của bạn.</h5>
										<form action="#" method="post">
												<input class="form-control" type="text" name="Email" placeholder="Hãy nhập vị trí của bạn..." required="">
											<input type="submit" value="Kiểm Tra">
										</form>
									</div>


									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="#" method="post">
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="googles_item" value="Farenheit">
														<input type="hidden" name="amount" value="575.00">
														<button type="submit" class="googles-cart pgoogles-cart">
															Thêm Vào Giỏ Hàng														</button>

													</form>

												</div>
									</div>
									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Chia sẻ : </li>
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

										</ul>

								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Miêu Tả</li>
											<li>Nhận Xét</li>
											<li>Thông Tin</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">

												<div class="single_page">
													<h6>{{$pro->name}}</h6>
													<p>
                                                        {!!$pro->content!!}
                                                    </p>
													<p class="para">Cam kết sản phẩm chính hãng, có giấy kiểm định và bảo hành trong trường hợp lỗi hay hư hỏng do máy.
                                                        Cam kết hoàn tiền 100% nếu sản phẩm không như mong đợi.
                                                    </p>
												</div>
											</div>
											<!--//tab_one-->
											<div class="tab2">
												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<img src="{!! asset('public/pages/images/admin.png')!!}" alt=" " class="img-fluid">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">Nguyễn Văn Hải</a></li>
																	<li><a href="{{route('pages.404')}}"><i class="fa fa-reply-all" aria-hidden="true"></i> Phản Hồi</a></li>
																</ul>
																<p>Sản phẩm thật sự rất tốt, nó thậm chí còn vượt xa cả mong đợi của tôi.
                                                                Máy chạy ổn định và rất mươt mà. Tôi thật sự rất tin tưởng khi mua hàng tại Escanor Shop.
                                                                </p>
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>Thêm Một Nhận Xét</h4>
															<form action="{{route('pages.404')}}" method="PUT">
																	<input class="form-control" type="text" name="Name" placeholder="Hãy nhập tên của bạn..." required="">
																<input class="form-control" type="email" name="Email" placeholder="Hãy nhập email của bạn..." required="">
																<textarea name="Message" required=""></textarea>
																<input type="submit" value="Gởi">
															</form>
														</div>
													</div>

												</div>
											</div>
											<div class="tab3">

                                                    <div class="single_page">
                                                        <h6>Tại sao nên chọn Escanor</h6>
                                                        <p>Là một của hàng bán lẻ rất uy tín và chất lượng tại Việt Nam.
                                                        Chúng tôi luôn muốn đem lại cho mọi người những sản phẩm mới nhất và sự trải nghiệm tốt nhất.</p>
                                                        <p class="para">Vì thế mà chúng tôi luôn luôn đặt sự lựa chọn của khách hàng lên hàng đầu,
                                                        luôn lắng nghe mọi ý kiến từ khách hàng.Từ đó chúng tôi nâng cấp bản thân mình lên mỗi ngày.
                                                        </p>
                                                    </div>


											</div>
										</div>
									</div>
								</div>
								<!--//tabs-->

					</div>
				</div>
			</div>
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Sản Phẩm Tương Tự</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
                                @foreach($product1 ?? '' as $pro1)
                                    <div class="item">
                                        <div class="gd-box-info text-center">
                                            <div class="product-men women_two bot-gd">
                                                <div class="product-googles-info slide-img googles">
                                                    <div class="men-pro-item">
                                                        <div class="men-thumb-item">
                                                            <img src="{{asset('public/images/img_product/'.$pro1->image)}}" class="img-fluid" alt="">
                                                            <div class="men-cart-pro">
                                                                <div class="inner-men-cart-pro">
                                                                    <a href="{{route('pages.detail_pro',$pro1->id)}}" class="link-product-add-cart">Chi Tiết</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="item-info-product">

                                                            <div class="info-product-price">
                                                                <div class="grid_meta">
                                                                    <div class="product_price">
                                                                        <h4>
                                                                            <a href="{{route('pages.detail_pro',$pro1->id)}}">{{$pro1->name}}</a>
                                                                        </h4>
                                                                        <div class="grid-price mt-2">
                                                                            <span class="money ">{{number_format($pro1->price)}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="googles single-item hvr-outline-out">
                                                                    <form action="#" method="post">
                                                                        <input type="hidden" name="cmd" value="_cart">
                                                                        <input type="hidden" name="add" value="1">
                                                                        <input type="hidden" name="googles_item" value="Fastrack Aviator">
                                                                        <input type="hidden" name="amount" value="325.00">
                                                                        <button type="submit" class="googles-cart pgoogles-cart">
                                                                            <i class="fas fa-cart-plus"></i>
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
		</section>
        @endforeach
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
		<!-- price range (top products) -->
		<script src="{!! asset('public/pages/js/jquery-ui.js')!!}"></script>
		<script>
			//<![CDATA[
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="{!! asset('public/pages/js/owl.carousel.js')!!}"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->

		<!-- single -->
		<script src="{!! asset('public/pages/js/imagezoom.js')!!}"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="{!! asset('public/pages/js/easy-responsive-tabs.js')!!}"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="{!! asset('public/pages/js/jquery.flexslider.js')!!}"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

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
