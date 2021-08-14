{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')
@section('title')
    Goldenstar Corp
@endsection
@section('content')
{{--<section id="home" class="no-padding wow fadeInDown">
    <div id="main-slide" class="cd-hero img-3-9 side-cd">
        <ul class="cd-hero-slider slides">
            @if ($pin[1])
            <li class="selected" >
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/{{$pin[1]->image}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[1]->id}}/{{\App\Http\Controllers\Controller::changeTitle($pin[1]->name,0,100)}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 "style="width:100%">
                            <h2 class="head_pin" >
                                {{$pin[1]->name}}
                            </h2>
                            <p style="overflow: hidden; height: 4em;">{{$pin[1]->summary}}</p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>    
            @else
            <li class="selected" >
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/default.jpg" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="ad/set/side" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 "style="width:100%">
                            <h2 class="head_pin" >
                                Bài Ghim Đã bị xóa!
                            </h2>
                            <p style="overflow: hidden; height: 4em;"></p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>     
            @endif
            
            @if ($pin[2])
            <li>
                <div class="overlay2">
                    <img style="width: 100%; " class="" src="post/{{$pin[2]->image}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[2]->id}}/{{\App\Http\Controllers\Controller::changeTitle($pin[2]->name,0,100)}}.html" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 br-img" style="width: 30%">
                        <img style=" height: 100%; background-position: center center; background-size: cover " src="post/{{$pin[2]->image}}" alt="">
                       </div>
                       <div class="img-6-9" style="width: 70%;">
                            <h3 class="head_pin" >
                                {{$pin[2]->name}} 
                            </h3>
                            <p style="overflow: hidden; height: 4em;">{{$pin[2]->summary}}</p>
                        </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>
            @else
            <li class="selected" >
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/default.jpg" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="ad/set/side" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 "style="width:100%">
                            <h2 class="head_pin" >
                                Bài Ghim Đã bị xóa!
                            </h2>
                            <p style="overflow: hidden; height: 4em;"></p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>     
            @endif
            @if ($pin[3])
            <li>
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/{{$pin[3]->image}}" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="page/{{$pin[3]->id}}/{{\App\Http\Controllers\Controller::changeTitle($pin[3]->name,0,100)}}.html" class="cd-btn" style="display:flex; margin:20px;">
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
            @else
            <li class="selected" >
                <div class="overlay2">
                    <img style="width: 100%;" class="" src="post/default.jpg" alt="slider">
                </div>
                <div class="cd-full-width">
                    <a href="ad/set/side" class="cd-btn" style="display:flex; margin:20px;">
                       <div class="img-6-9 "style="width:100%">
                            <h2 class="head_pin" >
                                Bài Ghim Đã bị xóa!
                            </h2>
                            <p style="overflow: hidden; height: 4em;"></p>
                       </div>
                    </a>
                </div> <!-- .cd-full-width -->     
            </li>     
            @endif

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
</section>--}}
<!--/ Slider end -->

<section id="home" class="no-padding">	

    <div id="main-slide" class="ts-flex-slider">

        <div class="flexSlideshow flexslider">
            <ul class="slides">
                <li>
                    <div class="overlay2">
                        <img class="" src="post/{{$pin[1]->image}}" alt="slider">
                    </div>
                    <div class="flex-caption slider-content">
                        <a href="page/{{$pin[1]->id}}/{{\App\Http\Controllers\Controller::changeTitle($pin[1]->name,0,100)}}.html">
                            <div class="col-md-12 text-center">
                                <h2 style="padding: 20px; line-height:1.2em" class="animated2">
                                    {{$pin[1]->name}}
                                </h2>
                                <h3 style="overflow: hidden; height: 4em;" class="animated3 hidden-xs">
                                    {{$pin[1]->summary}}
                                </h3>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="overlay2">
                        <img class="" src="post/{{$pin[2]->image}}" alt="slider">
                    </div>
                    <div class="flex-caption slider-content">
                        <a href="page/{{$pin[2]->id}}/{{\App\Http\Controllers\Controller::changeTitle($pin[2]->name,0,100)}}.html">
                            <div class="col-md-12 text-center">
                                <h2 style="padding: 20px; line-height:1.2em" class="animated4 hidden-xs">
                                    {{$pin[2]->name}}
                                </h2>
                                <h3 class="animated5 hidden-sx" style="overflow: hidden; height: 4em;">
                                    {{$pin[2]->summary}}
                                </h3>			     
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="overlay2">
                        <img class="" src="post/{{$pin[3]->image}}" alt="slider">
                    </div>
                    <div class="flex-caption slider-content">
                        <a href="page/{{$pin[2]->id}}/{{\App\Http\Controllers\Controller::changeTitle($pin[2]->name,0,100)}}.html">
                            <div class="col-md-12 text-center">
                                <h2 style="padding: 20px; line-height:1.2em" class="animated7 hidden-xs">
                                    {{$pin[3]->name}}
                                </h2>
                                <h3 class="animated8 hidden-sx" style="overflow: hidden; height: 4em; padding: 20px 0">
                                    {{$pin[3]->summary}}
                                </h3>     
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div><!--/ Main slider end -->    	
</section> <!--/ Slider end -->


<!-- Service box start -->
<div style="height: 30px"></div>
<!-- Service box start -->
<!--/ Team end -->
<!-- Team start -->
<section id="news" class="team service angle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon pull-left">
                <i class="fa fa-spinner fa-spin"></i>
                </span>
                <h2 class="title">TIN TỨC<span class="title-desc"></span></h2>
            </div>
        </div><!-- Title row end -->
        
        <div class="row text-center">
        <?php $dem = 0; ?>
        @foreach ($post as $item)
        <?php $dem += 3; ?>
        <a href="page/{{$item->id}}/{{\App\Http\Controllers\Controller::changeTitle($item->name,0,100)}}.html">
            <div class="col-md-4 col-sm-4 wow 
            <?php
                if($dem==3) echo "fadeInLeft" ;
                elseif($dem==6) echo "fadeInDown";
                else echo "fadeInRight";
            ?>
            " data-wow-delay=".3s">
                <div class="service-image card-img" >
                    <div class="img-6-9" >
                        <img src="post/{{$item->image}}" alt="{{$item->image}}" />
                    </div>
                    <h5 style="height: 3em; overflow: hidden;" class="font-weight-bold">{{$item->name}}</h5>
                    <p class="text-left" style="padding: 0 10px; color:gray; height: 5em; overflow: hidden; text-overflow: ellipsis;">
                    {{$item->summary}}
                    </p>
                    <p class="post-meta text-right">
                        <span class="post-meta-date">
                            <i class="fa fa-clock-o"></i> {{date("d/m/Y", strtotime($item->created_at))}}
                             - <i class="fa fa-eye"></i> {{$item->view}}
                        </span>
                    </p>
                </div>
            </div><!--/ End first service -->
        </a>   
        @endforeach 
        </div>
        
        <div class="container wow fadeInLeft" data-wow-delay=".6s">

            <a href="pages">
                <div style="width:140px; float:right;" class="text-center service-image card-img " >
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Xem Thêm
                </div>
            </a>
            <hr>
        </div>
        <script>size()</script>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Team end -->

<!-- Team start -->
<section id="product" class="team ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon pull-left">
                <i class="fa fa-star fa-spin" aria-hidden="true"></i>
                </span>
                <h2 class="title">SẢN PHẨM<span class="title-desc"></span></h2>
            </div>
        </div><!-- Title row end -->
        
        <div class="row text-center">
        <?php $dem = 0; ?>
        @foreach ($sp as $key=>$i)
        <div  id="k_{{$key}}" 
        class=" col-lg-3 col-sm-3 col-xs-6 portfolio-static-item 
        product tr_{{$i->id_trademark}}
        di_{{$i->id_distributor}} <?php
            if($dem<2) echo "fadeInLeft";
            else echo "fadeInRight";
            $dem++;
        ?> wow" data-wow-delay=".3s">
            <div class="grid ">
                <figure class="effect-oscar img-9-9">
                        @if (count(\App\Images::where(['id_post' => $i->id])->get()))
                        <img id="img_{{$i->id}}" style="width: 100%;height: 100%;" src="product/{{\App\Images::where(['id_post' => $i->id])->pluck('img')->first()}}" alt="">
                        @else
                        <img id="img_{{$i->id}}" style="width: 100%;height: 100%;" src="product/default.jpg" alt="">
                        @endif
                        <figcaption>
                            <div onclick="img_load(img_{{$i->id}})">
                            <a class="link icon-pentagon" data-toggle="modal"
                            data-target="#viewimg" >
                                <i class="fa fa-search"></i>                              
                            </a> 
                            <a href="products/{{$i->id}}" class="link icon-pentagon"  >
                                <i class="fa fa-link"></i>                              
                            </a> 
                            </div>            
                        </figcaption>			
                </figure>
                <a href="products/{{$i->id}}" class="portfolio-static-desc">
                    <h3 style="height: 3.5rem; overflow: hidden;">{{$i->name}}</h3>
                    @if ($i->promotion_price)
                    <p style="height: 1rem;" class="text-right price-old">@money($i->price) VND</p>
                    <p class="price text-right" >@money($i->promotion_price) VND</p>
                    @else
                    <p style="height: 1rem;"></p>
                    <p class="price text text-right">@money($i->price) VND</p> 
                    @endif
                </a>					
            </div><!--/ grid end -->
        </div><!--/ item 1 end -->
        @endforeach
        </div>
        
        <div class="container wow fadeInLeft" data-wow-delay=".6s">

            <a href="products">
                <div style="width:140px; float:right;" class="text-center service-image card-img " >
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Xem Thêm
                </div>
            </a>
            <hr>
        </div>
        <script>size()</script>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ Team end -->

<!-- Counter Strat -->
<section id="gioithieu" class="ts_counter no-padding">
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


<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon pull-left"><i class="fa fa-weixin"></i></span>
                <h2 class="title">{{$data['tag2']}}<span class="title-desc"></span></h2>
            </div>
        </div><!-- Title row end -->
        
        <div class="row text-center">
        <?php $dem =0; ?>
        @if (\App\Card::all()->where('id_tag',\App\Information::all()->where('Ten','tag2')->first()->id))
        @foreach (\App\Card::all()->where('id_tag',\App\Information::all()->where('Ten','tag2')->first()->id)->sortBy('id') as $item)
        <div class="col-md-3 col-sm-6">
            @if (($dem++)%2)
            <div class="team wow fadeInDown">
            @else
            <div class="team wow fadeInUp"> 
            @endif          
            <div class="img-hexagon">
                <img src="assets_pages/images/img/{{$item->img}}" alt="">
                <span class="img-top"></span>
                <span class="img-bottom"></span>
            </div>
            <div class="team-content">
                <h3>{{$item->title}}</h3>
                <p>{{$item->content}}</p>
            </div>
        </div>
    </div>
        @endforeach
        @endif

        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>

<section id="service" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
                <h2 class="title">{{$data['tag1']}}<span class="title-desc"></span></h2>
            </div>
        </div><!-- Title row end -->
        <div >
            <style>
                .cnm{
                    display: flex;
                    justify-content: space-around;
                    flex-wrap: wrap;
                }
                .cnm .col-k{
                    margin: auto;
                    width: 320px;
                }
            </style>
            @if (\App\Card::all()->where('id_tag',\App\Information::all()->where('Ten','tag1')->first()->id))
            <div class="cnm" >
                <?php $wow= 0 ?>
                @foreach (\App\Card::all()->where('id_tag',\App\Information::all()->where('Ten','tag1')->first()->id)->sortBy('id') as $item)
                <div class="col-k wow fadeInDown" data-wow-delay="<?php echo $wow+=0.3?>s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon">
                            <i class="{{$item->img}}" aria-hidden="true"></i>
                        </span>
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->content}}</p>
                    </div>
                </div>
                @endforeach
            </div>  
            @endif
        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>


<div>
    <div style="display: flex; width: auto; animation: run 10s linear infinite">
        @foreach (glob('trademark/*') as $item)
        @if($item != 'trademark/default.jpg')
            <div style="flex-shrink:0; width: 20vw; height: 20vw;margin:3px;overflow: hidden; border-radius: 5px ">
                <img style="width: 100%; height: 100%" src="{{$item}}" alt="">
            </div>
        @endif
        @endforeach
    </div>
</div>
<style>
    @keyframes run 
    {
        0%{transform: translateX(100%)}
        100%{transform: translateX(-100%)}
    }
</style>
<!--/ Service box end -->

<!-- Team start -->


<!--/ Image block end -->
<div class="modal fade" id="viewimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-lg">
        <div style="border: none" class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <img id="img" style="margin: auto" width="100%" src="" alt="">
        </div>
    </div>
    </div>
</div>
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
<script>
    function img_load(url)
    {
        document.getElementById('img').src = url.src;
    }
</script>  
@endsection
