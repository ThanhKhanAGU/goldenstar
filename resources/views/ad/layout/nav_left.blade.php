<div class="left-side-menu">
    <div class="slimscroll-menu">
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                @if (Auth::user()->role == 1)
                    <li class="menu-title">Quản Lý Trang Chủ</li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="fas fa-home"></i>
                            <span> Trang chủ </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ad/set/side">Quản lý Slide</a></li>
                            <li><a href="ad/set/tag1">{{\App\Information::all()->where('Ten','tag1')->first()->NoiDung}}</a></li>
                            <li><a href="ad/set/tag2">{{\App\Information::all()->where('Ten','tag2')->first()->NoiDung}}</a></li>
                            <li><a href="ad/set/tag3">Thành Tựu</a></li>
                            <li><a href="ad/set/intr">Bài viết giới thiệu</a></li>
                            <li><a href="ad/set/policy">Chính Sách công ty</a></li>
                            <li><a href="ad/set/com">Thông tin liên hệ</a></li>
                        </ul>
                    </li>
                @endif
                

                <li class="menu-title">Quản Lý Thông Tin</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class=" fas fa-pen-nib"></i>
                        <span> Bài viết </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ad/post/list">Danh Sách Bài Viết</a></li>
                        <li><a href="ad/post/add">Thêm Bài Viết</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fas fa-running"></i>
                        <span> Hoạt động </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ad/action/list">Danh Sách Bài Viết</a></li>
                        <li><a href="ad/action/add">Thêm Bài Viết</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fas fa-warehouse"></i>
                        <span> Nhà phân phối </span>
                        <span class="menu-arrow"></span>
                    </a>
                    
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ad/distributor/list">Danh Sách Bài Viết</a></li>
                        <li><a href="ad/distributor/add">Thêm Bài Viết</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fas fa-box-open"></i>
                        <span> Sản phẩm </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ad/product/list">Danh Sách Bài Viết</a></li>
                        <li><a href="ad/product/add">Thêm Bài Viết</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fas fa-bookmark"></i>
                        <span> Nhãn hiệu </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ad/trademark/list">Danh Sách Bài Viết</a></li>
                        <li><a href="ad/trademark/add">Thêm Bài Viết</a></li>
                    </ul>
                </li>

                @if (Auth::user()->role == 1)
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class=" ion ion-md-people"></i>
                            <span> Người Dùng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ad/user/list">Danh Sách Người Dùng</a></li>
                            <li><a href="ad/user/add">Thêm Người Dùng</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
        <div class="clearfix"></div>
    </div>
</div>