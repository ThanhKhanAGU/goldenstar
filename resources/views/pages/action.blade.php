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
            <h1 class="text-center col-12">HOẠT ĐỘNG CÔNG TY</h1>
        </div>
        <div class="row">
            <hr>
        </div>
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
                            <h3 style="height:6.5rem; overflow: hidden; text-align: center">{{$i->name}}</h3>
                            <p class="text-center">
                              <i class="fa fa-clock-o" aria-hidden="true"></i>
                               {{$i->timetake}}
                            </p>
                        </a>					
                    </div><!--/ grid end -->
                </div><!--/ item 1 end -->
                @endforeach 
            </div>
        </div><!-- Content row end --> 
        <hr>
        <div class="row">
            {!!$p->links()!!} 
        </div>
    </div><!-- Container end -->
</section><!-- Portfolio end -->

<div class="gap-40"></div>
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

