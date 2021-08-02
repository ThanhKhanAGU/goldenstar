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
	<style>
		*{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		
		.img-6-9 > img,.img-3-9 > img, .img-9-9 >img{
			width: 100%;
            height: 100%;
			background-size: cover; 
			overflow: hidden;
		}
		.img-6-9,.img-3-9,.img-9-9{
			overflow: hidden;
			border-radius: 3px;
		}
	</style>

<script>
	
	function size()
	{
		var mapElement = document.getElementsByClassName("img-6-9");
		for(i=0;i<mapElement.length;i++)
		{
			mapElement[i].style.height = mapElement[i].offsetWidth*6/9+"px";
		
		}
		var mapElement = document.getElementsByClassName("img-3-9");
		for(i=0;i<mapElement.length;i++)
		{
			mapElement[i].style.height = mapElement[i].offsetWidth*4/9+"px";
		
		}
		var mapElement = document.getElementsByClassName("img-9-9");
		for(i=0;i<mapElement.length;i++)
		{
			mapElement[i].style.height = mapElement[i].offsetWidth+"px";
		
		}
	}
	window.addEventListener("resize",size);
</script>

</head>
<body onload="size()">
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
    <script src="assets\js\vendor.min.js"></script>
    <script src="assets\libs\parsleyjs\parsley.min.js"></script>
    <script src="assets\js\pages\form-validation.init.js"></script>
    <script src="assets\js\app.min.js"></script>
    @yield('js')
</body>
</html