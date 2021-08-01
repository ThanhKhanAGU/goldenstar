{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')

@section('content')
<section id="home" class="no-padding wow fadeInDown">
    <div id="main-slide" class="cd-hero img-3-9 side-cd">
        <ul class="cd-hero-slider">
            <li class="selected" >
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/{{$pin[1]->HinhAnh}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[1]->id}}/{{$pin[1]->TieuDeKhongDau}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 "style="width:100%">
                            <h5 style="color: orangered; height: 2.5em; line-height: 2.5em; overflow: hidden;">
                                {{$pin[1]->TieuDe}}
                            </h5>
                            <p style="overflow: hidden; height: 4em;">{{$pin[1]->TomTat}}</p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>
            <li>
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/{{$pin[2]->HinhAnh}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[2]->id}}/{{$pin[2]->TieuDeKhongDau}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9" style="width: 70%">
                            <h5 style="color: orangered; height: 2.5em; line-height: 2.5em; overflow: hidden;">
                                {{$pin[2]->TieuDe}} 
                            </h5>
                            <p style="overflow: hidden; height: 4em;">{{$pin[2]->TomTat}}</p>
                       </div>
                       <div class="img-6-9 br-img" style="width: 30%">
                        <img style=" height: 100%; background-position: center center; background-size: cover " src="post/{{$pin[2]->HinhAnh}}" alt="">
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>
            <li>
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/{{$pin[3]->HinhAnh}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[3]->id}}/{{$pin[3]->TieuDeKhongDau}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9" style="width: 70%">
                            <h5 style="color: orangered; height: 2.5em; line-height: 2.5em; overflow: hidden;">
                                {{$pin[3]->TieuDe}} 
                            </h5>
                            <p style="overflow: hidden; height: 4em;">{{$pin[3]->TomTat}}</p>
                       </div>
                       <div class="img-6-9 br-img" style="width: 30%">
                            <img style="height: 100%;background-position: center center; background-size: cover " src="post/{{$pin[3]->HinhAnh}}" alt="">
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

<!-- Service box start -->
<div style="height: 30px"></div>
<!-- Service box start -->
<section id="service" class="service angle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
                <h2 class="title">{{$data['tag1']}}<span class="title-desc"></span></h2>
            </div>
        </div><!-- Title row end -->
        <div >
            <div class="cnm" >
                <?php $wow= 0 ?>
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-k wow fadeInDown" data-wow-delay="<?php echo $wow+=0.3?>s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon">
                                <i class="{{$data['tag1_'.$i.'_icon']}}" aria-hidden="true"></i>
                            </span>
                            <h3>{{$data['tag1_'.$i.'_title']}}</h3>
                            <p>{{$data['tag1_'.$i.'_ct']}}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Team start -->
<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
                <h2 class="title">{{$data['tag2']}}<span class="title-desc"></span></h2>
            </div>
        </div><!-- Title row end -->
        
        <div class="row text-center">
        @for ($i = 1; $i < 5; $i++)
        <div class="col-md-3 col-sm-6">
                <?php
                    if($i<=2)
                        echo '<div class="team wow slideInLeft">'; 
                    else {
                        echo '<div class="team wow slideInRight">'; 
                    }   
                ?>
                <div class="img-hexagon">
                    <img src="assets_pages/images/img/{{$data['tag2_'.$i.'_icon']}}" alt="">
                    <span class="img-top"></span>
                    <span class="img-bottom"></span>
                </div>
                <div class="team-content">
                    <h3>{{$data['tag2_'.$i.'_title']}}</h3>
                    <p>{{$data['tag2_'.$i.'_ct']}}</p>
                </div>
            </div>
        </div>
        <!--/ Team 1 end -->
        @endfor
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Team end -->

<!-- Counter Strat -->
<div id="gioithieu" style="height: 65px;"></div>
<section class="ts_counter no-padding">
    <div class="container-fluid">
        <div class="row facts-wrapper wow fadeInLeft text-center">
            @for ($i = 1; $i < 5; $i++)
                <div class="facts one col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="{{$data['sl_'.$i.'_icon']}}"></i></span>
                    <div class="facts-num">
                        <span class="counter">{{$data['sl_'.$i]}}</span>
                    </div>
                    <h3>{{$data['sl_'.$i.'_ten']}}</h3>
                </div>
            @endfor
        </div>
    </div>
    <!--/ Container end -->
</section>
<!--/ Counter end -->

<section id="image-block" class="image-block no-padding">
    <div class="container-fluid" style="margin: 20px;margin-top: 0">
        <div class="row wow fadeInUp">
            <!-- <div class="col-md-6 ts-padding img img-thumbnail" style="max-height:650px; background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;"> -->
            <div class="col-md-6 img-6-9">
                <img src="assets_pages/images/{{$data['gt_icon']}}" alt="">
            </div>
            <div class="col-md-6">
                <div style="text-align: justify">
                    <h3 class="font-weight-bold text-center">{{$data['gt_title']}}</h3>
                    {!!$data['gt_ct']!!}
                </div>
            </div>

        </div>
    </div>
</section>
<!--/ Image block end -->

    
@endsection