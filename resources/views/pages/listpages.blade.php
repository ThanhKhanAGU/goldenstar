{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')

@section('content')
<!-- Slider start -->
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
<div style="height: 30px"></div>
<section id="main-container" class="service angle">
    <div class="container">
        <div class="row">
            <!-- Blog start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-none d-sm-block">
                <!-- Features start -->
                <div class="row post hidden-xs">   
                    <h4> <i class="fa fa-th-list"></i> Bài Viết Mới Nhất<span class="title-desc"></span></h4>
                    <?php $dem = 0; ?>
                    @foreach ($moi as $item)
                    <?php $dem += 3; ?>
                    <a href="page/{{$item->id}}/{{$item->TieuDeKhongDau}}.html">
                        <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".{{$dem}}s">
                            <div class="service-image card-img" >
                                <div class="img-6-9" >
                                    <img src="post/{{$item->HinhAnh}}" alt="{{$item->HinhAnh}}" />
                                </div>
                                <h5 class="font-weight-bold">{{$item->TieuDe}}</h5>
                                <p style="color:gray; height: 5em; overflow: hidden; text-overflow: ellipsis;">{{$item->TomTat}}</p>
                                <p class="post-meta text-right">
                                    <span class="post-meta-date">
                                        <i class="fa fa-clock-o"></i> {{$item->created_at}}
                                        <i class="fa fa-eye"></i> {{$item->SoLuotXem}}
                                    </span>
                                </p>
                            </div>
                        </div><!--/ End first service -->
                    </a>   
                    @endforeach                 
                </div><!-- Content Row end -->
            </div><!--/ Content col end -->
            
            <!-- sidebar start -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">              
                <h3 class="widget-title">Bài Viết Nổi Bật</h3>  
                <div class="container">
                    <div class="row card mb-3">
                        @foreach ($noibat as $tt)
                        <a href="page/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                            <div class="row g-0 card-w card-img">
                                <div class="col-md-4 col-sm-5 col-xs-5">
                                    <div style="width: 90%; height: 90%; margin: 5%" class="img-6-9">
                                        <img src="post/{{$tt->HinhAnh}}">
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div>
                                        <h5 class="font-weight-bold">{{$tt->TieuDe}}</h5>
                                        <p class="post-meta">
                                            <span class="post-meta-date">
                                                <i class="fa fa-clock-o"></i> {{$tt->created_at}}
                                                <i class="fa fa-eye"></i> {{$tt->SoLuotXem}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div><!--/ Content row end -->
                </div>
            </div>
            </div><!--/ row end -->
            <h4> <i class="fa fa-th-list"></i> Danh Sách Bài Viết <span class="title-desc"></span></h4>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="card col-md-9">
                        @foreach ($tintuc as $tt)
                        <a href="page/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                            <div class="row g-0 card-w card-img">
                                <div class="col-md-4 col-sm-5 col-xs-5">
                                    <div style="width: 90%; height: 90%; margin: 5%" class="img-6-9">
                                        <img src="post/{{$tt->HinhAnh}}">
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div>
                                        <h5 class="font-weight-bold">{{$tt->TieuDe}}</h5>
                                        <p style="color:gray; height: 3em; overflow: hidden; text-overflow: ellipsis;" >
                                            {{$tt->TomTat}}
                                        </p>
                                        <p class="post-meta">
                                            <span class="post-meta-date">
                                                <i class="fa fa-clock-o"></i> {{$tt->created_at}}
                                                <i class="fa fa-eye"></i> {{$tt->SoLuotXem}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        {!!$tintuc->links()!!}
                    </div><!--/ Content row end -->   
                      
                </div>                 
            </div>
    </div><!--/ container end -->
</section><!-- Blog details page end -->





@endsection