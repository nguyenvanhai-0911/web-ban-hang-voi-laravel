<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('public/asset/admin/assets/images/favicon.png')!!}">
	<title>Escanor Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link href="{!! asset('public/pages/css/style.css')!!}" rel='stylesheet' type='text/css' />
	<link href="{!! asset('public/pages/css/fontawesome-all.css')!!}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!--//banner-sec-->
    @yield('pages_content')
    <!-- home -->

	<!-- about -->
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
							<a href="{{route('pages.contact')}}">Liên Hệ</a>
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
	<!-- Modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h7>Tham Gia Bản Tin Của Chúng Tôi Và Nhận</h7>
					<h4>Giảm Giá 20% Cho Mặt Hàng Đầu Tiên Của Các Bạn</h4>
					<div class="login newsletter">
						<form action="{{route('pages.404')}}" method="PUT">
							<div class="form-group">
								<label class="mb-2">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Được Giảm Giá 20%</button>
						</form>
						<p class="text-center">
							<a href="#">Không! Tôi Muốn Được Trả Giá Đầy Đủ</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

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
	<!-- Count-down -->
	<script src="{!! asset('public/pages/js/simplyCountdown.js')!!}"></script>
	<link href="{!! asset('public/pages/css/simplyCountdown.css')!!}" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
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
