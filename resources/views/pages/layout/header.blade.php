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
                    <a href="{{asset('')}}">
                        <img class="img-responsive" src="assets_pages/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <!--/ Logo end -->
            <nav class="collapse navbar-collapse clearfix" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="{{asset('/')}}" class="dropdown-toggle"> Trang chủ </a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"> Giới thiệu <i class="fa fa-angle-down"></i> </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{asset('#gioithieu')}}">Giới thiệu công ty</a></li>
                                <li><a href="{{asset('#gioithieu')}}">Chính sách chất lượng</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="home" class="dropdown-toggle" data-toggle="dropdown">Truyền thông<i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="pages">Tin tức</a></li>
                                <li><a href="actions">Chia sẽ cộng đồng</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="{{asset('')}}" class="dropdown-toggle" data-toggle="dropdown">Phân phối</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="products">Sản Phẩm</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="trademarks" class="dropdown-toggle" data-toggle="dropdown">Thương hiệu</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{asset('')}}" class="dropdown-toggle" data-toggle="dropdown">Liên hệ<i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="{{asset('')}}">Zalo</a></li>
                                <li><a href="{{asset('')}}">Facebook</a></li>
                            </ul>
                        </div>
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