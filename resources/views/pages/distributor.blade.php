{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')
@section('title')
    Nhà Cung Cấp
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
<!--/ Slider end -->
<div style="height: 30px"></div>
<section id="main-container" class="service angle">
    <div class="container">
        <div class="row">
            </div><!--/ row end -->
            <h4> <i class="fa fa-th-list"></i>Nhà phân phối <span class="title-desc"></span></h4>
            <hr>
            <div class="container">
                
                <div class="row">
                    <div class="card col-md-9">
                        @foreach ($di as $i)
                            <a href="distributors/{{$i->id}}">
                                <div class="row g-0 card-w card-img">
                                    <div class="col-md-4 col-sm-5 col-xs-5">
                                        <div style="width: 90%; height: 90%; margin: 5%" class="img-6-9">
                                            <img src="distributor/{{\App\Images::where(['id_post' => $i->id])->pluck('img') ->first()}}">
                                        </div>
                                    </div>
                                    <div class="col-md-8 ">
                                        <div>
                                            <h5  style="height: 3em;overflow: hidden; color: red" class="font-weight-bold">{{$i->name}}</h5>
                                            <div class="content-di"  >
                                                {!! $i->content !!}
                                            </div>
                                            <p class="post-meta">
                                                <span class="post-meta-date">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i> {{$i->place}}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        {!!$di->links()!!}
                    </div><!--/ Content row end -->   
                      
                </div>                 
            </div>
    </div><!--/ container end -->
</section><!-- Blog details page end --> 
<style>
    .content-di{
        height: 3.5em;
        overflow: hidden;
        color: gray;
        text-overflow: ellipsis;
    }
</style>
@endsection