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
                <img src="{!! asset('xadmin/assets/images/logo-icon.png') !!}" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="{!! asset('xadmin/assets/images/logo-icon-rev2.png') !!}" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
                 <!-- dark Logo text -->
                 <img src="{!! asset('xadmin/assets/images/logo-text.png') !!}" alt="homepage" class="dark-logo" />
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
            <li class="nav-item d-lg-block"><a class="nav-link waves-effect waves-light" style="color: black;" href="{!! route('dashboard') !!}"><h1 style="padding-top: 8px;"><i class="mdi mdi-home-variant"></i></h1></a></li>
            {{-- =========== --}}
            <!-- ============================================================== -->
            <!-- menu 1 -->
            <!-- ============================================================== -->
            <li class="nav-item"><a class="nav-link waves-effect waves-dark" style="color: black;" href="{!! route('laravel-intro') !!}"><b>Beginner</b></a></li>
            <!-- ============================================================== -->
            <!-- menu 2 -->
            <!-- ============================================================== -->
            <li class="nav-item"><a class="nav-link waves-effect waves-dark" href="#" style="color: black;"><b>Advanced</b></a></li>
            <!-- menu 3 -->
            <!-- ============================================================== -->
            <li class="nav-item"><a class="nav-link waves-effect waves-dark" href="#" style="color: black;"><b>Expert</b></a></li>
            <!-- menu 4 -->
            <!-- ============================================================== -->
            <li class="nav-item"><a class="nav-link waves-effect waves-dark" href="#" style="color: black;"><b>Config Collaboration</b></a></li>

        </ul>
        <!-- ============================================================== -->
        <!-- Right side toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-right">
          <!-- ============================================================== -->
          <!-- Search -->
          <!-- ============================================================== -->
          <li class="nav-item search-box nav-item-right"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
              <form class="app-search position-absolute">
                  <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
              </form>
          </li>
            <!-- ============================================================== -->
            <!-- create new -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flag-icon flag-icon-id"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-id"></i> Indonesia</a>
                </div>
            </li>
            <!-- ============================================================== -->

        </ul>
    </div>
</nav>
