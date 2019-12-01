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
            @include('home.layouts.navbar')
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
              @include('home.layouts.sidebarnav')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper bg-white">
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
