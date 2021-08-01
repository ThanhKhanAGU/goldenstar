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
<!-- Portfolio item start -->
<section id="portfolio-item">
    <div class="container">
        <!-- Portfolio item row start -->
        <div class="row">
            <!-- Portfolio item slider start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="portfolio-slider">
                    <div class="flexportfolio flexslider">
                        <ul class="slides">
                            <li><img src="assets_pages/images/img/10tyCovid(1).jpg" alt=""></li>
                            <li><img src="assets_pages/images/portfolio/portfolio-bg2.jpg" alt=""/></li>
                            <li><img src="assets_pages/images/portfolio/portfolio-bg3.jpg" alt=""/></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Portfolio item slider end -->

            <!-- sidebar start -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="portfolio-desc">
                        <h3 class="widget-title">About Project</h3>
                        <p>Oat cake oat cake dessert brownie. Gummies tiramisu tart jujubes jelly beans macaroon danish pie muffin. Soufflé pudding brownie pudding fruitcake marshmallow.
                        </p>
                        <br/>
                        <h3 class="widget-title">Used Skills</h3>
                        <p>HTML5, CSS3, jQuery, Ruby &amp; Rails</p>
                        <br/>
                        <h3 class="widget-title">Clients</h3>
                        <p>BizCraft Incorporatin Ltd.</p>
                        <p><a href="#" class="project-btn btn btn-primary">Project Link</a></p>
                    </div>
                </div>
            </div>
            <!-- sidebar end -->
        </div><!-- Portfolio item row end -->
    </div><!-- Container end -->
</section><!-- Portfolio item end -->

<div class="gap-40"></div>

@endsection


