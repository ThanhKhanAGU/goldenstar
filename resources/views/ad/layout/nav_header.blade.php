<div id="wrapper">
       
<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="font-16 m-0">
                        <span class="float-right">
                            <a href="" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>
            </div>
        </li>

        <li class="dropdown notification-list">
            {{-- {{ $user_login }} --}}
            {{-- @if (Auth::check())
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="ad/blade" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fas fa-user-alt rounded-circle"></i>
                    <span class="pro-user-name ml-1">
                        {{Auth::user()->name}}   <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-outline"></i>
                        <span>Profile</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-lock-outline"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="ad/logout" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout-variant"></i>
                        <span>Logout</span>
                    </a>

                </div>
                
            @endif --}}
            
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                <i class="mdi mdi-settings-outline noti-icon"></i>
            </a>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="ad\blade" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="assets_pages\images\logo.png" alt="" height="50">
                <!-- <span class="logo-lg-text-dark">Velonic</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-lg-text-dark">V</span> -->
                <img src="assets\images\logo-sm.png" alt="" height="22">
            </span>
        </a>
    </div>

    <!-- LOGO -->


    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>

        <li class="d-lg-block my-custom-search">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</div>
<!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
