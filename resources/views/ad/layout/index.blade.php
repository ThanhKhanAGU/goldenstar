<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Form Validation | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{asset('')}}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">

    <!-- App css -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
    @yield('css')
</head>
<body>
    <div id="wrapper">

            
        <!-- Topbar Start -->
        @include('ad.layout.nav_header')
        <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
        @include('ad.layout.nav_left')
<!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <div >
                    <div class="card">
                        <div class="card-body">
                           @yield('content')
                        </div>
                    </div>
                    <!-- end card -->
                </div>

            </div>
            <!-- end content -->

            

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    @include('ad.layout.nav_right')
    <script src="assets\js\vendor.min.js"></script>
    <script src="assets\libs\parsleyjs\parsley.min.js"></script>
    <script src="assets\js\pages\form-validation.init.js"></script>
    <script src="assets\js\app.min.js"></script>
    @yield('js')
</body>
</html