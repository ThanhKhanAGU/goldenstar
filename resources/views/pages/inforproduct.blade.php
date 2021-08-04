@extends('pages.layout.main')
@section('title')
    {{$product->name}}
@endsection
@section('content')
<style>
    .header{
      background: black;
    }
    #main-container{
      margin-top: 3rem;
    }
  </style>
<!-- Portfolio start -->
<!-- Portfolio item start -->
<section id="portfolio-item">
    <div class="container">
        <!-- Portfolio item row start -->
        <div class="row">
            <!-- Portfolio item slider start -->
            @if (count($images))
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="portfolio-slider">
                    <div class="flexportfolio flexslider img-9-9">
                        <ul class="slides">
                            @foreach ($images as $i)
                                <li><img style="height: 100%; width: 100%" src="product/{{$i->img}}" alt=""></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>  
            @else
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="portfolio-slider">
                    <div class="flexportfolio flexslider img-9-9">
                        <ul class="slides">                         
                            <li><img style="height: 100%; width: 100%" src="product/default.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>   
            @endif
            <!-- Portfolio item slider end -->

            <!-- sidebar start -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="portfolio-desc" style="margin-top: 2.5rem">
                        <br/>
                        <h2 class="widget-title" style="color: #111; margin-bottom: 0">{{$product->name}}</h2>
                        <hr>
                        <div class="content-product">
                            {!! $product->content !!}
                        </div>    
                        @if ($product->promotion_price>0)
                            <p style="height: 1rem;" class="price-old">@money($product->price) VND</p>
                            <p class="price" >@money($product->promotion_price) VND</p>
                        @else
                            <p style="height: 1rem;"></p>
                            <p class="price text ">@money($product->price) VND</p> 
                        @endif
                        <p><a href="products/{{$product->id}}/#description-product" class="project-btn btn btn-primary">Xem chi tiết</a></p>
                    </div>
                </div>
            </div>
            <!-- sidebar end -->
        </div><!-- Portfolio item row end -->
        
        <div class="row" id="description-product">
            <div class="container">
                <div class="row" >
                    <hr>
                    <h3 class="widget-title">
                    <i class="fa fa-th-list" aria-hidden="true"></i>    Mô tả chi tiết:</h3>
                    <hr>
                    <p>{!! $product->content !!} </p>
                </div>
            </div>
        </div>
    </div><!-- Container end -->
</section><!-- Portfolio item end -->

<div class="gap-40"></div>

@endsection

<style>
    .price{
        font-size: 2rem;
        color: #f71b10;
    }
    .content-product{
        height: 20rem; 
        overflow: auto;
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


