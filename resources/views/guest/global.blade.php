<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('xadmin/assets/images/favicon.png') !!}">
    <title>AdminX Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{!! asset('xadmin/assets/libs/chartist/dist/chartist.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('xadmin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') !!}" rel="stylesheet">
    <link href="{!! asset('xadmin/assets/extra-libs/c3/c3.min.css') !!}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{!! asset('xadmin/dist/css/style.min.css') !!}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar shadow">
          <nav class="navbar top-navbar navbar-expand-md navbar-dark">
              <div class="navbar-header">
                  <!-- This is for the sidebar toggle which is visible on mobile only -->
                  <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <a class="navbar-brand" href="{!! route('dashboard') !!}">
                      <!-- Logo icon -->
                      <b class="logo-icon">
                          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                          <!-- Dark Logo icon -->
                          <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                          <!-- Light Logo icon -->
                          <img src="{!! asset('xadmin/assets/images/logo-icon-rev2.png') !!}" alt="homepage" class="light-logo" />
                      </b>
                      <!--End Logo icon -->
                      <!-- Logo text -->
                      <span class="logo-text">
                           <!-- dark Logo text -->
                           <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                           <!-- Light Logo text -->
                           <img src="{!! asset('xadmin/assets/images/logo-text-m-rev4.png') !!}" class="light-logo" alt="homepage" />
                      </span>
                  </a>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- Toggle which is visible on mobile only -->
                  <!-- ============================================================== -->
                  <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
              </div>
              <!-- ============================================================== -->
              <!-- End Logo -->
              <!-- ============================================================== -->
              <div class="navbar-collapse collapse" id="navbarSupportedContent">
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-left mr-auto">
                      <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                      {{-- simbol home --}}
                      <li class="nav-item d-lg-block"><a class="nav-link waves-effect waves-light" href="{!! route('dashboard') !!}"><h1 style="padding-top: 8px;" class="text-dark"><i class="mdi mdi-home-variant"></i></h1></a></li>
                      {{-- =========== --}}
                      <!-- ============================================================== -->
                      <!-- mega menu 1 -->
                      <!-- ============================================================== -->
                      <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <h4 style="padding-top: 22px;"><span class="d-none d-md-block text-dark">Tutorial <i class="fa fa-angle-down"></i></span>
                           <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span></h4>
                          </a>
                          <div class="dropdown-menu animated bounceInDown">
                              <div class="mega-dropdown-menu row">
                                  <div class="col-lg-3 col-xlg-2 m-b-30">
                                      <h4 class="m-b-20" style="color: black;">Laravel Beginner</h4>
                                      <a href="{!! route('laravel-intro') !!}" style="color: black;"><b>Learn 1</b></a> <br>
                                      <a href="#" style="color: black;"><b>Learn etc</b></a>
                                  </div>
                                  <div class="col-lg-3 m-b-30">
                                      <h4 class="m-b-20" style="color: black;">Laravel Advanced</h4>
                                      <a href="#" style="color: black;"><b>Learn 1</b></a> <br>
                                      <a href="#" style="color: black;"><b>Learn etc</b></a>
                                  </div>
                                  <div class="col-lg-3  m-b-30">
                                      <h4 class="m-b-20" style="color: black;">Laravel Expert</h4>
                                      <a href="#" style="color: black;"><b>Learn 1</b></a> <br>
                                      <a href="#" style="color: black;"><b>Learn etc</b></a>
                                  </div>
                                  <div class="col-lg-3 col-xlg-4 m-b-30">
                                      <h4 class="m-b-20" style="color: black;">Laravel Config Collaboration</h4>
                                      <a href="#" style="color: black;"><b>Learn 1</b></a> <br>
                                      <a href="#" style="color: black;"><b>Learn etc</b></a>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <!-- ============================================================== -->
                      <!-- End mega menu -->
                      <!-- ============================================================== -->
                      <!-- ============================================================== -->
                      <!-- mega menu 2 -->
                      <!-- ============================================================== -->
                      <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <h4 style="padding-top: 22px;"><span class="d-none d-md-block text-dark">Study Case <i class="fa fa-angle-down"></i></span>
                           <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span></h4>
                          </a>
                          <div class="dropdown-menu animated bounceInDown">
                              <div class="mega-dropdown-menu row">
                                  <div class="col-md-4 text-center">
                                      <a href="#" style="color: black;"><h4 class="">E-Commerce</h4></a>
                                  </div>
                                  <div class="col-md-4 text-center">
                                      <a href="#" style="color: black;"><h4 class="">Toko Buku Online</h4></a>
                                  </div>
                                  <div class="col-md-4 text-center">
                                      <a href="#" style="color: black;"><h4 class="">App Realtime</h4></a>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <!-- ============================================================== -->
                      <!-- End mega menu -->
                      <!-- ============================================================== -->
                      <!-- ============================================================== -->
                      <!-- mega menu 3 -->
                      <!-- ============================================================== -->
                      <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <h4 style="padding-top: 22px;"><span class="d-none d-md-block text-dark">Artikel <i class="fa fa-angle-down"></i></span>
                           <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span></h4>
                          </a>
                          <div class="dropdown-menu animated bounceInDown">
                              <div class="mega-dropdown-menu row">
                                  <div class="col-lg-4 col-xlg-2 text-center">
                                      <a href="#" style="color: black;"><h4 class="m-b-20">Islami</h4></a>
                                  </div>
                                  <div class="col-lg-4 text-center">
                                      <a href="#" style="color: black;"><h4 class="m-b-20">Teknologi</h4></a>
                                  </div>
                                  <div class="col-lg-4  text-center text-center">
                                      <a href="#" style="color: black;"><h4 class="m-b-20">Tips & trik</h4></a>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <!-- ============================================================== -->
                      <!-- End mega menu -->
                      <!-- ============================================================== -->
                      <!-- ============================================================== -->

                  </ul>
                  <!-- ============================================================== -->
                  <!-- Right side toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-right">
                      <!-- ============================================================== -->
                      <!-- create new -->
                      <!-- ============================================================== -->
                      <!-- ============================================================== -->
                      <!-- Search -->
                      <!-- ============================================================== -->
                      <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><h4 style="padding-top: 22px;"><i class="ti-search"></i></h4></a>
                          <form class="app-search position-absolute">
                              <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                          </form>
                      </li>
                      {{-- end search --}}
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-id"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                              <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-id"></i> Indonesia</a>
                              <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                          </div>
                      </li>


                      <!-- ============================================================== -->

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

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        @yield('breadcrumb')
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Notifications, Chart -->
                <!-- ============================================================== -->
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by AdminX. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        @include('home.layouts.sidebarcustomizer')
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{!! asset('xadmin/assets/libs/jquery/dist/jquery.min.js') !!}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{!! asset('xadmin/assets/libs/popper.js/dist/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('xadmin/assets/libs/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <!-- apps -->
    <script src="{!! asset('xadmin/dist/js/app.min.js') !!}"></script>
    <script src="{!! asset('xadmin/dist/js/app.init.js') !!}"></script>
    <script src="{!! asset('xadmin/dist/js/app-style-switcher.js') !!}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{!! asset('xadmin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') !!}"></script>
    <script src="{!! asset('xadmin/assets/extra-libs/sparkline/sparkline.js') !!}"></script>
    <!--Wave Effects -->
    <script src="{!! asset('xadmin/dist/js/waves.js') !!}"></script>
    <!--Menu sidebar -->
    <script src="{!! asset('xadmin/dist/js/sidebarmenu.js') !!}"></script>
    <!--Custom JavaScript -->
    <script src="{!! asset('xadmin/dist/js/custom.min.js') !!}"></script>
    <!--This page JavaScript -->
    <script src="{!! asset('xadmin/assets/libs/chartist/dist/chartist.min.js') !!}"></script>
    <script src="{!! asset('xadmin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') !!}"></script>
    <!--c3 charts -->
    <script src="{!! asset('xadmin/assets/extra-libs/c3/d3.min.js') !!}"></script>
    <script src="{!! asset('xadmin/assets/extra-libs/c3/c3.min.js') !!}"></script>
    <script src="{!! asset('xadmin/dist/js/pages/dashboards/dashboard9.js') !!}"></script>
</body>

</hxadmin
