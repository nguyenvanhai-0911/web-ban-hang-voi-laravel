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
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Shop</li>
					</ul>
				</div>
	</div>

</div>

<!--/shop-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Sản Phẩm Của Chúng Tôi</h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Tìm Kiếm Ở Đây..</h3>
								<form action="#" method="post">
										<input class="form-control" type="search" name="search" placeholder="Nhập tại đây..." required="">
										<button class="btn1">
												<i class="fas fa-search"></i>
										</button>
										<div class="clearfix"> </div>
									</form>
							</div>
							<!-- price range -->
							<!-- //price range -->
							<!--preference -->
							<!-- // preference -->
							<!-- discounts -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Giảm Giá </h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">5% trở lên</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">10% trở lên</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">20% trở lên</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">30% trở lên</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">50% trở lên</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">60% trở lên</span>
									</li>
								</ul>
							</div>
							<!-- //discounts -->
							<!-- reviews -->
							<div class="customer-rev left-side">
								<h3 class="agileits-sear-head">Thương Hiệu</h3>

                                    @foreach($brand_all ?? '' as $br_all)
                                            <li class="media-mini mt-3">
                                                <a href="{{route('pages.search_brand',$br_all->id)}}">{{$br_all->name}}</a>
                                            </li>
                                        @endforeach

							</div>
							<!-- //reviews -->
							<!-- deals -->

							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
										<div class="col-md-6 shop_left">
												<img src="{!! asset('public/pages/images/banner3.jpg')!!}" alt="">
												<h6>40% off</h6>
											</div>
											<div class="col-md-6 shop_right">
												<img src="{!! asset('public/pages/images/banner4.jpg')!!}" alt="">
												<h6>50% off</h6>
											</div>

								</div>
								<div class="row">
									<!-- /womens -->
                                   @foreach($product1 ?? '' as $pro1)
                                    <div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{{asset('public/images/img_product/'.$pro1->image)}}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">{{$pro1->name}}</a>
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
																<input type="hidden" name="googles_item" value="Farenheit">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
                                   @endforeach


								</div>
								<div class="row my-lg-3 my-0">
										<!-- /womens -->
                                        @foreach($product ?? '' as $pro2)
                                            <div class="col-md-3 product-men women_two shop-gd">
                                                <div class="product-googles-info googles">
                                                    <div class="men-pro-item">
                                                        <div class="men-thumb-item">
                                                            <img src="{{asset('public/images/img_product/'.$pro2->image)}}" class="img-fluid" alt="">
                                                            <div class="men-cart-pro">
                                                                <div class="inner-men-cart-pro">
                                                                    <a href="{{route('pages.detail_pro',$pro2->id)}}" class="link-product-add-cart">Chi Tiết</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="item-info-product">

                                                            <div class="info-product-price">
                                                                <div class="grid_meta">
                                                                    <div class="product_price">
                                                                        <h4>
                                                                            <a href="single.html">{{$pro2->name}}</a>
                                                                        </h4>
                                                                        <div class="grid-price mt-2">
                                                                            <span class="money ">{{number_format($pro2->price)}}</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Farenheit">
																		<input type="hidden" name="amount" value="575.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>

																</div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


										<!-- /mens -->
									</div>


									<div class="row">
											<!-- /womens -->
									</div>


							</div>
						</div>
						<!--//product right-->
					</div>
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Sản Phẩm Tương Tự</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
                                @foreach($product ?? '' as $pro_all)
                                    <div class="item">
                                        <div class="gd-box-info text-center">
                                            <div class="product-men women_two bot-gd">
                                                <div class="product-googles-info slide-img googles">
                                                    <div class="men-pro-item">
                                                        <div class="men-thumb-item">
                                                            <img src="{{asset('public/images/img_product/'.$pro_all->image)}}" class="img-fluid" alt="">
                                                            <div class="men-cart-pro">
                                                                <div class="inner-men-cart-pro">
                                                                    <a href="{{route('pages.detail_pro',$pro_all->id)}}" class="link-product-add-cart">Chi Tiết</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="item-info-product">

                                                            <div class="info-product-price">
                                                                <div class="grid_meta">
                                                                    <div class="product_price">
                                                                        <h4>
                                                                            <a href="{{route('pages.detail_pro',$pro_all->id)}}">{{$pro_all->name}}</a>
                                                                        </h4>
                                                                        <div class="grid-price mt-2">
                                                                            <span class="money ">{{number_format($pro_all->price)}}</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Farenheit">
																		<input type="hidden" name="amount" value="575.00">
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
			</div>
		</section>

@endsection
