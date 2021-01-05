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

			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="about-content py-lg-5 py-3">
					<div class="row">

						<div class="col-lg-6 p-0">
							<img src="{!! asset('public/pages/images/banner1.png')!!}" alt="Goggles" class="img-fluid">
						</div>
						<div class="col-lg-6 about-info">
							<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">Về Chúng  Tôi</h3>
							<p class="my-xl-4 my-lg-3 my-md-4 my-3">Escanor được thành lập vào tháng 01/2018.
                            Trên thực tế, đội ngũ giàu kinh nghiệm của chúng tôi đã đồng hành cùng nhau từ năm 2009 tiền thân là Garena Vietnam.
                            Sứ mệnh của Escanor đang được viết tiếp như cách chúng tôi vẫn hướng tới từ trước đến nay:
                            “Thay đổi cuộc sống con người bằng cách cung cấp các trải nghiệm tuyệt vời trên nền tảng Internet”.
							</p>
						</div>
					</div>
				</div>
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Đội Ngũ Escanor</h3>
				<div class="partners-info">
					<div class="row mt-lg-5 mt-3">
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="{!! asset('public/pages/images/admin.png')!!}" alt="">
								</div>
								<div class="team-info">
									<h4>Nguyễn Văn Hải</h4>
									<span>Chủ Tịch</span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="https://www.facebook.com/nguyenvanhai.0911/">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					 <div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="{!! asset('public/pages/images/admin2.png')!!}" alt="">
								</div>
								<div class="team-info">
									<h4>Lê Minh Nhật</h4>
									<span>Giám Đốc</span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="https://www.facebook.com/NhatMinh0509/">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="{!! asset('public/pages/images/admin3.png')!!}" alt="">
								</div>
								<div class="team-info">
									<h4>Nguyễn Thành Công</h4>
									<span>Trợ Lý</span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="https://www.facebook.com/NxG.ThanhCong/">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="{!! asset('public/pages/images/admin4.png')!!}" alt="">
								</div>
								<div class="team-info">
									<h4>Trần Minh Tâm</h4>
									<span>Thư Ký</span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="https://www.facebook.com/profile.php?id=100010245548107">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Đảm Bảo Sự Hài Lòng</h4>
							<p>Chúng tôi cam kết chất lượng sản phẩm và sự trả nghiệm tốt nhất.
                            Hỗ trợ 100% trong thời gian bảo hàng sản phẩm.
                            </p>
							<p>
								<a href="{{route('pages.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Mua Ngay</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Chuyển Phát Nhanh</h4>
							<p>Giao hàng nhanh chóng, đúng thời gian, cho phép kiểm tra trước khi lấy hàng.
                            Đổi trả hàng miễn phí và hoàn tiền 100% nếu phát hiện sản phẩm lỗi.
                            </p>
							<p>
								<a href="{{route('pages.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Mua Ngay</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Đảm Bảo Giá Cả</h4>
							<p>Cam kết giá cả phải chăng, không đẩy giá lên quá cao, không chặc chém khách hàng.
                            Hoàn lại tiền nếu phát hiện gian dối.
                            </p>
							<p>
								<a href="{{route('pages.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Mua Ngay</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Giảm Giá Dịp Tết</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

						</div>
					</div>
				</div>
				<!--//meddle-->

				<!-- /testimonials -->
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Trải Nghiệm</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>Khách Hàng
											<span>Thân Thiết</span>
										</h3>
										<label>Của Chúng Tôi</label>
										<p>Tôi đã mua rất nhiều sản phẩm tại cửa hàng Escanor và tôi thật sự rất tin tưởng.
                                        Các sản phẩm mà họ bày bán luôn luôn đảm bảo sự trải nghiệm tốt nhất cho khách hàng cả về chất lượng và giá cả.
                                        </p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Khách Hàng
											<span>Vãng Lai</span>
										</h3>
										<label>Của Chúng Tôi</label>
										<p>Tôi chỉ mua một vài sản phẩm ở cửa hàng Escanor nhưng thật sự họ đã gây dựng được sự tin tưởng rất lớn trong tôi.
                                        Các sản phẩm mà họ bày bán luôn luôn tốt cả về chất lượng và giá cả.
                                        </p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Đôi Lời
											<span>Nhắn Nhủ</span>
										</h3>
										<label>Của Chúng Tôi</label>
										<p>Chúng tôi luôn luôn đặt nặng vấn đề về trải nghiệm của khách hàng và chất lượng của sản phẩm.
                                        Chúng tôi luôn cố gắng để có thể đem lại sự trải nghiệm tốt nhất cho người dùng.
                                        </p>
									</div>
								</div>
								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>

								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- //testimonials -->
				<div class="row galsses-grids pt-lg-5 pt-3">
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="{!! asset('public/pages/images/banner2.png')!!}" alt="" class="img-fluid">
							<figcaption>
								<h3>Sản Phẩm
									<span>Chính Hãng</span>
								</h3>
								<p style="color: aliceblue;"> Đỉnh cao của sự sáng tạo</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="{!! asset('public/pages/images/banner3.png')!!}" alt="" class="img-fluid">
							<figcaption>
								<h3>Cam Kết
									<span>Giá Tốt</span>
								</h3>
								<p style="color: aliceblue;">Thiết Kế mạnh mẽ vượt trội</p>
							</figcaption>
						</figure>
					</div>
				</div>

				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Chính Hãng</h3>
								<p>Cam kết sản phẩm chính hãng.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Chất Lượng</h3>
								<p>Chất lượng sản phẩm tốt nhất cho khách hàng.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Dễ Dàng</h3>
								<p>Thanh toán dễ dàng bằng nhiều cách.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Nhanh Chóng</h3>
								<p>Giao hàng nhanh chóng, đúng giờ.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->

			</div>
		</div>
</section>

@endsection
