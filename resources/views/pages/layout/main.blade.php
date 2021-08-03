<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">	
	<meta name="author" content="">
    <base href="{{asset('')}}">
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets_pages/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="assets_pages/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="assets_pages/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="assets_pages/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="assets_pages/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="assets_pages/css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="assets_pages/css/owl.carousel.css">
	<link rel="stylesheet" href="assets_pages/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="assets_pages/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="assets_pages/css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="assets_pages/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<style>
		*{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		
		.img-6-9 > img,.img-3-9 > img, .img-9-9 >img{
			width: 100%;
			background-size: cover; 
			overflow: hidden;
		}
		.img-6-9,.img-3-9,.img-9-9{
			overflow: hidden;
			border-radius: 3px;
		}
		.side-cd{
			min-height: 25em
		}
		.card-img{
			margin-bottom: 10px;
			padding: 12px;
			border-radius: 5px;
			position: relative;
			transition: top, box-shadow 200ms linear;
			box-shadow: 2px 2px 7px rgba(221, 221, 221, 0.3);
		}
		.card-img > h4
		{
			font-weight: bold;
		}

		.card-img:hover{
			top:-1px;
			box-shadow: 3px 3px 10px rgb(175, 175, 175)
		}
		hr{
			border: 1px solid orangered;
		}
		.costom-cd{
			display: flex;
		}

		.costom-cd > li{
			margin:auto;
			height: .9em;
			width:3em;
			background:rgb(255, 255, 255);
			border-radius: 2px;
			background-image: url('assets_pages/images/overaly.png');
			transition: all 100ms linear;
			margin: 5px;
			line-height: .9em;
		}
		.costom-cd .selected{
			background: orangered;
			height: .9em;height: 1em;
		}
		.cd-slider-nav nav ul{
			height: auto;
		}
		.costom-cd-p{
			bottom:-1vw !important;
		}
		.br-img{
			border: 4px solid white;
			margin: 1em;
		}
		.head_pin{
			color: orangered; 
			height: 2.5em;
			line-height: 2.5em; 
			overflow: hidden;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			font-weight: bold;
			text-shadow: 5px 5px 20px #000000
		}
		/* width */
		::-webkit-scrollbar {
			width: 12px
		}
		/* Track */
		::-webkit-scrollbar-track {			
			width: 5px;
			background: #d6d6d6
		}
		
		/* Handle */
		::-webkit-scrollbar-thumb {
			background: orangered; 
			border-radius: 5px;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: orangered; 
			width: 20px;
		}
		#back-to-top * {
			outline: none;	
		}
		#back-to-top{
		}
	</style>
	
	@yield('css')
<link rel="stylesheet" href="assets_pages/css/baiviet.css">
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
	<div class="body-inner">

        @include('pages.layout.header')

        @yield('content')

        @include('pages.layout.footer')

		<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="assets_pages/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="assets_pages/js/bootstrap.min.js"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="assets_pages/js/style-switcher.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="assets_pages/js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="assets_pages/js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="assets_pages/js/jquery.flexslider.js"></script>
	<!-- CD Hero slider -->
	<script type="text/javascript" src="assets_pages/js/cd-hero.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="assets_pages/js/isotope.js"></script>
	<script type="text/javascript" src="assets_pages/js/ini.isotope.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="assets_pages/js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="assets_pages/js/smoothscroll.js"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="assets_pages/js/jquery.easing.1.3.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="assets_pages/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="assets_pages/js/waypoints.min.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="assets_pages/js/custom.js"></script>
	</div>
	@yield('js')
</body>
</html>