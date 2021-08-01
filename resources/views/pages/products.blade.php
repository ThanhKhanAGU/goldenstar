@extends('pages.layout.main')
@section('content')
<div id="banner-area">
    <img src="assets_pages/images/banner/banner2.jpg" alt ="" />
    <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>Portfolio Static</h2>
                <ul class="breadcrumb">
                    <li>Home</li>
                    <li>Portfolio</li>
                    <li><a href="#"> Portfolio Static</a></li>
                  </ul>
              </div>
          </div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Portfolio start -->
<section id="main-container" class="portfolio-static portfolio portfolio-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                @for ($i = 0;$i  < 30; $i++)
                <div class="col-lg-3 col-sm-4 portfolio-static-item">
                    <div class="grid ">
                        <figure class="effect-oscar img-9-9">
                                <img src="assets_pages/images/portfolio/portfolio2.jpg" alt="">
                            <figcaption>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto" href="assets_pages/images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>            
                            </figcaption>			
                        </figure>
                        <div class="portfolio-static-desc">
                            <h3>Startup Business</h3>
                            <span><a href="#">Illustrations</a></span>
                            <p class="price">450.000 VND</p>
                        </div>					
                    </div><!--/ grid end -->
                </div><!--/ item 1 end -->
                @endfor
            </div>
            
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <!-- category start -->
                    <div class="widget widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="category-list clearfix">
                          <li><a href="#">Objects</a><span class="posts-count"> (19)</span></li>
                          <li><a href="#">Technology</a><span class="posts-count"> (09)</span></li>
                          <li><a href="#">Photography</a><span class="posts-count"> (13)</span></li>
                          <li><a href="#">Fashion</a><span class="posts-count"> (10)</span></li>
                          <li><a href="#">Realtough</a><span class="posts-count"> (14)</span></li>
                          <li><a href="#">Architecture</a><span class="posts-count"> (11)</span></li>
                        </ul>
                    </div><!-- category end -->
                </div><!--/ Sidebar end -->
            </div><!--/ Sidebar col end -->
        </div><!-- Content row end -->
        
    </div><!-- Container end -->
</section><!-- Portfolio end -->

<div class="gap-40"></div>

<style>
    .price{
        font-size: 1.6rem;
        color: #f71b10;
    }
</style>


@endsection


