{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')

@section('content')
<!-- Slider start -->
<section id="home" class="no-padding ">
    <div id="main-slide" class="cd-hero img-3-9 side-cd">
        <ul class="cd-hero-slider">
            <li class="selected" >
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/default.jpg" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 br-img" style="display: flex">
                            <img style="margin: auto" src="post/default.jpg" alt="">
                       </div>

                       <div class="img-6-9 " style="">
                            <h5 style="color: orangered; height: 2.5em; line-height: 2.5em; overflow: hidden;">CÔNG TY 4 ORANGES CO., LTD ĐỒNG HÀNH CÙNG TỔNG LÃNH SỰ QUÁN HOÀNG GIA THÁI LAN TRAO TẶNG TRÊN 200 CHIẾC XE LĂN, XE LẮC TẠI LONG AN</h5>
                            <p style="overflow: hidden; height: 4em;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quisquam numquam voluptatibus vel atque quia enim! Neque excepturi ex impedit similique illum sequi culpa, voluptates praesentium sint facere explicabo maxime.</p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>
            <li>
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/default.jpg" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9" style="">
                            <h5 style="color: orangered; height: 2.5em; line-height: 2.5em; overflow: hidden;">CÔNG TY 4 ORANGES CO., LTD ĐỒNG HÀNH CÙNG TỔNG LÃNH SỰ QUÁN HOÀNG GIA THÁI LAN TRAO TẶNG TRÊN 200 CHIẾC XE LĂN, XE LẮC TẠI LONG AN</h5>
                            <p style="overflow: hidden; height: 4em;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quisquam numquam voluptatibus vel atque quia enim! Neque excepturi ex impedit similique illum sequi culpa, voluptates praesentium sint facere explicabo maxime.</p>
                       </div>
                       <div class="img-6-9 br-img" style="display: flex">
                            <img style="margin: auto" src="post/default.jpg" alt="">
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>
            <li>
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/default.jpg" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 br-img" style="display: flex">
                            <img style="margin: auto" src="post/default.jpg" alt="">
                       </div>

                       <div class="img-6-9" style="">
                            <h5 style="color: orangered; height: 2.5em; line-height: 2.5em; overflow: hidden;">CÔNG TY 4 ORANGES CO., LTD ĐỒNG HÀNH CÙNG TỔNG LÃNH SỰ QUÁN HOÀNG GIA THÁI LAN TRAO TẶNG TRÊN 200 CHIẾC XE LĂN, XE LẮC TẠI LONG AN</h5>
                            <p style="overflow: hidden; height: 4em;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quisquam numquam voluptatibus vel atque quia enim! Neque excepturi ex impedit similique illum sequi culpa, voluptates praesentium sint facere explicabo maxime.</p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>

        </ul>
        <!--/ cd-hero-slider -->

        <div class="cd-slider-nav costom-cd-p">
            <nav>
                <ul class="costom-cd">
                   <li class="selected" ></li>
                   <li></li>
                   <li></li>				
                </ul>
            </nav>
        </div>
            <!-- .cd-slider-nav -->

    </div>
    <!--/ Main slider end -->
</section>
<!--/ Slider end -->
<section id="main-container">
    <div class="container">
        <div class="row">
            <!-- Blog start -->
            <div>
                <!-- Features start -->
                <div class="row post">   
                    <h4> <i class="fa fa-th-list"></i> Hoạt động<span class="title-desc"></span></h4>
                    
                    @foreach ($hoatdong as $item)
                    
                    <a href="hoatdong/{{$item->id}}/{{$item->TenKhongDau}}">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInDown" data-wow-delay="0.3s">
                            <div class="service-image card-img" >
                                <div class="img-6-9" >
                                    <img src="post/{{$item->HinhAnh}}" alt="{{$item->HinhAnh}}" />
                                </div>
                                <h5 class="font-weight-bold">{{$item->TenHoatDong}}</h5>
                                <p style="color:gray; height: 5em; overflow: hidden; text-overflow: ellipsis;">{{$item->NoiDung}}</p>
                                <p class="post-meta text-right">
                                    <span class="post-meta-date">
                                        <i class="fa fa-clock-o"></i> {{$item->created_at}}
                                        <i class="fa fa-eye"></i> 11
                                    </span>
                                </p>
                            </div>
                        </div><!--/ End first service -->
                    </a>   
                    @endforeach                 
                </div><!-- Content Row end -->
            </div><!--/ Content col end -->
    </div><!--/ container end -->
</section><!-- Blog details page end -->





@endsection