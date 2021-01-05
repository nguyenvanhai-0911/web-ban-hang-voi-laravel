<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, materialpro admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Escanor-Shop</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('public/asset/admin/assets/images/favicon.png')!!}">
    <!-- chartist CSS -->
    <link href="{!! asset('public/asset/admin/assets/plugins/chartist-js/dist/chartist.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('public/asset/admin/assets/plugins/chartist-js/dist/chartist-init.css')!!}" rel="stylesheet">
    <link href="{!! asset('public/asset/admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')!!}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{!! asset('public/asset/admin/assets/plugins/c3-master/c3.min.css" rel="stylesheet')!!}">
    <!-- Custom CSS -->
    <link href="{!! asset('public/asset/admin/html/css/style.min.css')!!}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ml-4" href="{{URL::to('/admin')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{!! asset('public/asset/admin/assets/images/logo-light-icon.png')!!}" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{!! asset('public/asset/admin/assets/images/logo-escanor.png')!!}" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php
                                        if(Auth::User()->image != ""){ ?>
                                            <img src="{{asset('public/images/img_account/'.Auth::User()->image)}}" alt="user" class="profile-pic m-r-10">
                                    <?php }
                                        else if (Auth::User()->image == ""){ ?>
                                    <?php } ?>
                                    <?php
                                        $name = Auth::User()->name;
                                        echo $name;
                                    ?>
                                  </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{URL::to('/admin/dashboard')}}" aria-expanded="false"><i class="mdi mr-2 mdi-gauge"></i>
                                    <span class="hide-menu">Bảng Điều Khiển</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('user.index')}}" aria-expanded="false"><i class="mdi mr-2 mdi-account-check"></i>
                                    <span class="hide-menu">Quản Lý Tài Khoản</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('brand.index')}}" aria-expanded="false"><i class="mdi mr-2 mdi-book-open-variant"></i>
                                    <span class="hide-menu">Quản Lý Thương Hiệu</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('category.index')}}" aria-expanded="false"><i class="mdi mr-2 mdi-nutrition"></i>
                                    <span class="hide-menu">Quản Lý Danh Mục</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('product.index')}}" aria-expanded="false"><i class="mdi mr-2 mdi-table"></i>
                                    <span class="hide-menu">Quản Lý Sản Phẩm</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#" aria-expanded="false"><i class="mdi mr-2 mdi-cards-playing-outline"></i>
                                    <span class="hide-menu">Khuyến Mãi</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#" aria-expanded="false"><i class="mdi mr-2 mdi-store"></i>
                                    <span class="hide-menu">Nhà Cung Cấp</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#" aria-expanded="false"><i class="mdi mr-2 mdi-account-card-details"></i>
                                <span class="hide-menu">Khách Hàng</span></a>
                            </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#" aria-expanded="false"><i class="mdi mr-2 mdi-cart-plus"></i>
                                <span class="hide-menu">Đơn Đặt Hàng</span></a>
                            </li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="{{route('get-admin-Logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->


            <!-- @content -->
            @yield('admin_content')

            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> Nguyễn Văn Hải <a href="https://www.facebook.com/nguyenvanhai.0911/">Facebook</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{!! asset('public/ckeditor/ckeditor.js')!!}"></script>
        <script>CKEDITOR.replace("id_ckeditor")</script>

    <script src="{!! asset('public/asset/admin/assets/plugins/jquery/dist/jquery.min.js')!!}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{!! asset('public/asset/admin/assets/plugins/popper.js/dist/umd/popper.min.js')!!}"></script>
    <script src="{!! asset('public/asset/admin/assets/plugins/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
    <script src="{!! asset('public/asset/admin/html/js/app-style-switcher.js')!!}"></script>
    <!--Wave Effects -->
    <script src="{!! asset('public/asset/admin/html/js/waves.js')!!}"></script>
    <!--Menu sidebar -->
    <script src="{!! asset('public/asset/admin/html/js/sidebarmenu.js')!!}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{!! asset('public/asset/admin/assets/plugins/chartist-js/dist/chartist.min.js')!!}"></script>
    <script src="{!! asset('public/asset/admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')!!}"></script>
    <!--c3 JavaScript -->
    <script src="{!! asset('public/asset/admin/assets/plugins/d3/d3.min.js')!!}"></script>
    <script src="{!! asset('public/asset/admin/assets/plugins/c3-master/c3.min.js')!!}"></script>
    <!--Custom JavaScript -->
    <script src="{!! asset('public/asset/admin/html/js/pages/dashboards/dashboard1.js')!!}"></script>
    <script src="{!! asset('public/asset/admin/html/js/custom.js')!!}"></script>
</body>

</html>
