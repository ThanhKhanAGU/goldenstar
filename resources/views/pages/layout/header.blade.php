<!-- Header start -->

<header id="header" class="navbar-fixed-top header" role="banner">
    <div class="hr-he"></div>
    <div class="container">
        <div class="row">
            <!-- Logo start -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-bg">
                    <a href="home">
                        <img style="height: 100%"class="img-responsive" src="logo_main.png" alt="logo">
                    </a>
                </div>
            </div>
            <!--/ Logo end -->
            <nav class="collapse navbar-collapse clearfix" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown <?php if($s == 'home') echo 'active' ?>">
                        <a href="{{asset('/')}}" class="dropdown-toggle "> Trang chủ </a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle " data-toggle="dropdown"> Giới thiệu <i class="fa fa-angle-down"></i> </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{asset('#gioithieu')}}">Giới thiệu công ty</a></li>
                                <li><a href="page/2/Bai_viet_gioi_thieu_chinh_sach_chat_luong.html">Chính sách chất lượng</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown <?php if($s == 'pages'||$s == 'actions') echo 'active' ?>">
                        <a href="home" class="dropdown-toggle" data-toggle="dropdown">Truyền thông<i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="<?php if($s == 'pages') echo 'active' ?>"><a href="pages">Tin tức & thông báo</a></li>
                                <li class="<?php if($s == 'actions') echo 'active' ?>"><a  href="actions">Chia sẽ cộng đồng</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown <?php if($s == 'products') echo 'active' ?>">
                        <a href="products" class="dropdown-toggle "> Sản phẩm </a>
                    </li>
                    <li class="dropdown <?php if($s == 'di') echo 'active' ?>">
                        <a href="distributors" class="dropdown-toggle "> Phân phối </a>
                    </li>
                    <li class="dropdown <?php if($s == 'tra') echo 'active' ?>">
                        <a href="trademarks" class="dropdown-toggle "> Thương hiệu </a>
                    </li>
                </ul>
            </nav>
            <!--/ Navigation end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->
</header>
<!--/ Header end -->