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

<section id="main-container" class="portfolio-static portfolio portfolio-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                @foreach ($p as $i)
                <div class="col-lg-3 col-sm-4 col-xs-6 portfolio-static-item">
                    <div class="grid ">
                        <figure class="effect-oscar img-9-9">
                                <img style="width: 100%;height: 100%;" src="assets_pages/images/portfolio/portfolio2.jpg" alt="">
                            <figcaption>
                                <a class="link icon-pentagon" href="portfolio-item.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a  class="view icon-pentagon" data-toggle="modal" data-target="#viewimg"
                                onclick="loadimg_side()">
                                    <i class="fa fa-search"></i>
                                </a>            
                            </figcaption>			
                        </figure>
                        <a href="" class="portfolio-static-desc">
                            <h3 style="height: 7rem;">{{$i->name}}</h3>
                            {{-- <span style="color:#555">{!!$i->content !!}</span> --}}
                            @if ($i->price % 3 != 0)
                                <p style="height: 1rem;"></p>
                                <p class="price text text-right">@money($i->price) VND</p> 
                            @else
                                <p class="text-right price-old">600.000 VND</p>
                                <p class="price text-right" >450.000 VND</p>
                            @endif


                        </a>					
                    </div><!--/ grid end -->
                </div><!--/ item 1 end -->
                @endforeach
            </div>
            
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <!-- category start -->
                    <div class="widget widget-categories">
                        <h3 class="widget-title">Cung cấp bởi</h3>
                        <ul class="category-list clearfix">
                            @foreach ($tr as $i)
                                <li><a href="#">{{$i->name}}</a><span class="posts-count"> (19)</span></li>
                            @endforeach
                        </ul>
                    </div><!-- category end -->
                </div><!--/ Sidebar end -->
            </div><!--/ Sidebar col end -->
        </div><!-- Content row end -->
        
    </div><!-- Container end -->
</section><!-- Portfolio end -->

<div class="gap-40"></div>

<div class="modal fade" id="viewimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body" style="display: flex">
            <div style="margin: auto;box-shadow: 3px 4px 5px #5c5c5c" id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
              
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active ">
                    <img style="width: 60vh;height: 60vh;" src="https://ttol.vietnamnetjsc.vn/images/2018/05/25/13/40/net-cuoi-be-gai-9-1527053440039156820618.jpg" alt="Los Angeles">
                  </div>
              
                  <div class="item ">
                    <img style="width: 60vh;height: 60vh;" src="https://ttol.vietnamnetjsc.vn/images/2018/05/25/13/40/net-cuoi-be-gai-9-1527053440039156820618.jpg" alt="Chicago">
                  </div>
              
                  <div class="item">
                    <img style="width: 60vh;height: 60vh;" src="https://ttol.vietnamnetjsc.vn/images/2018/05/25/13/40/net-cuoi-be-gai-9-1527053440039156820618.jpg" alt="New York">
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>



<style>
    .price{
        font-size: 1.6rem;
        color: #f71b10;
    }
    .price-old{
        color:#555; 
        font-size: .9em; 
        height: 1rem; 
        text-decoration: line-through;
        font-style: italic;
        overflow: visible
    }
</style>


@endsection
@section('js')
    <script>
        function loadimg_side(array)
        {
            
        }
    </script>
@endsection

