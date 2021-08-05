{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')
@section('title')
    Goldenstar Corp
@endsection
@section('content')
<section id="home" class="no-padding wow fadeInDown">
    <div id="main-slide" class="cd-hero img-3-9 side-cd">
        <ul class="cd-hero-slider">
            <li class="selected" >
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/{{$pin[1]->image}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[1]->id}}/{{substr($pin[1]->name,0,100)}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 "style="width:100%">
                            <h2 class="head_pin" >
                                {{$pin[1]->name}}
                            </h2>
                            <p style="overflow: hidden; height: 4em;">{{$pin[1]->summary}}</p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>
            <li>
                <div class="overlay2">
                    <img style="width: 100%; " class="" src="post/{{$pin[2]->image}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[2]->id}}/{{substr($pin[2]->name,0,100)}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9" style="width: 70%;">
                            <h3 class="head_pin" >
                                {{$pin[2]->name}} 
                            </h3>
                            <p style="overflow: hidden; height: 4em;">{{$pin[2]->summary}}</p>
                       </div>
                       <div class="img-6-9 br-img" style="width: 30%">
                        <img style=" height: 100%; background-position: center center; background-size: cover " src="post/{{$pin[2]->image}}" alt="">
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>
            <li>
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/{{$pin[3]->image}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[3]->id}}/{{substr($pin[3]->name,0,100)}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9" style="width: 70%">
                            <h3 class="head_pin" >
                                {{$pin[3]->name}} 
                            </h3>
                            <p style="overflow: hidden; height: 4em;">{{$pin[3]->summary}}</p>
                       </div>
                       <div class="img-6-9 br-img" style="width: 30%">
                            <img style="height: 100%;background-position: center center; background-size: cover " src="post/{{$pin[3]->image}}" alt="">
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
    <div class="container">
        <div class="baiviet">
            <div class="row">
                <div class="background img-3-9">
                    <img src="post/{{$gt->image}}" alt="">
                    <span class="filter"></span>
                </div>
                <div class="text-center">
                    <h2 class="head_gt">{!!$gt->name!!}</h2>
                </div>
                <br>
                <div class="col-12">
                    <div style="padding: 10px" class="post-content text-justify">
                        <p><b>{!!$gt->summary!!}</b></p>
                        <br/>
                        {!!$gt->content!!}
                    </div><!--/ post content end -->
                    <br>
                </div>
            </div>
        </div>    
    </div>
</section>
<!--/ Image block end -->

<style>

.text-justify p{
    text-align: justify;
    text-indent: 1.5em;
}
.head_gt{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:orangered;
    font-weight: bold;
    text-shadow: 1px 1px 2px rgb(27, 27, 27)
}

</style>    
@endsection
