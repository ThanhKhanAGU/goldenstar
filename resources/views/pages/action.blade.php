@extends('pages.layout.main')
@section('content')
<style>
    .header{
      background: black;
    }
    #main-container{
      margin-top: 3rem;
    }
  </style>
<section id="main-container" class="portfolio-static portfolio portfolio-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @foreach ($p as $i)
                
                <div class="col-lg-3 col-sm-4 col-xs-6 portfolio-static-item wow fadeInDown" data-wow-delay="0.3s">
                    <div class="grid ">
                        <figure class="effect-oscar img-9-9">
                            @if (count(\App\Images::where(['id_post' => $i->id])->get()))
                                <img style="width: 100%;height: 100%;" src="action/{{\App\Images::where(['id_post' => $i->id])->pluck('img')->first()}}" alt="">
                            @else
                            <img style="width: 100%;height: 100%;" src="action/default.jpg" alt="">
                            @endif
                                
                            <figcaption>
                                <a class="link icon-pentagon" href="actions/{{$i->id}}">
                                    <i class="fa fa-link"></i>
                                </a>
                                         
                            </figcaption>			
                        </figure>
                        <a href="actions/{{$i->id}}" class="portfolio-static-desc">
                            <h3 style="height: 4rem; overflow: hidden; text-align: center">{{$i->name}}</h3>
                        </a>					
                    </div><!--/ grid end -->
                </div><!--/ item 1 end -->
                @endforeach 
            </div>
        </div><!-- Content row end --> 
        {!!$p->links()!!} 
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
                    @foreach (\App\Images::where(['id_post' => $i->id])->get() as $img)
                        <div class="item active ">
                            <img style="width: 60vh;height: 60vh;" src="product/{{$img->img}}" alt="Los Angeles">
                        </div>
                    @endforeach
                  
              
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

