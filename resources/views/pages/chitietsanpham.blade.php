{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')
@section('content')
	<!-- Portfolio item start -->
	<section id="portfolio-item">
		<div class="container">
			<!-- Portfolio item row start -->
			<div class="row">
				<!-- Portfolio item slider start -->
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="portfolio-slider">
						<div class="flexportfolio flexslider img-9-9">
                            <img src="post/{{$sanpham->HinhAnh}}" alt="">
						</div>
					</div>
				</div>
				<!-- Portfolio item slider end -->

				<!-- sidebar start -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar">
						<div class="portfolio-desc">
							<h3 class="widget-title">{{$sanpham->TenSanPham}}</h3>
							<p>{{$sanpham->NoiDung}}</p>
							<h3 class="price">{{$sanpham->Gia}} VND</h3>
							<br/>
						</div>
					</div>
				</div>
				<!-- sidebar end -->
			</div><!-- Portfolio item row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio item end -->

	<div class="gap-40"></div>

    <style>
        .header {
            background: black;
        }
        section {
            padding-top: 160px;
        }
        .sidebar h3.widget-title {
            margin-top: 7rem;
        }
				.price{
					text-align: center;
				}
    </style>

@endsection