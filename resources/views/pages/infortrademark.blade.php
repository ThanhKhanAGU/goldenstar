@extends('pages.layout.main')
@section('title')
    {{$data->name}}
@endsection
@section('content')
<div class="baiviet">
    <div class="background img-3-9">
        @if (count(\App\Images::where(['id_post' => $data->id])->get()))
            <img src="trademark/{{\App\Images::where(['id_post' => $data->id])->pluck('img')->first()}}" alt="">
        @else
            <img style="width: 100%;height: 100%;" src="action/default.jpg" alt="">
        @endif
        
        <span class="filter"></span>
    </div>

    <div class="text-center">
        <h2>{!!$data->name!!}</h2>
    </div> 
<section id="main-container" style="padding-top: 0">
<div class="container">
    <div class="row">
        @if (count(\App\Images::where(['id_post' => $data->id])->get()))
        <div class="col-12" style="display: flex">
            <div class="portfolio-slider col-lg-8 col-md-10" style="margin: auto">
                <div class="flexportfolio flexslider ">
                    <ul class="slides ">
                        @foreach ($data->images as $i)
                            <li style="width: 80vw;">
                                <img style="height: 100%; width: 100%" src="trademark/{{$i->img}}" alt="">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
            <div class="text-center">
                <i >Hình ảnh Thương Hiệu</i>
            </div>
            
        @endif
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p class="container">
               {!!$data->content!!}
            </p><!--/ post content end -->
            <br>
        </div> 
    </div><!--/ row end -->
    <hr>
    <div class="row">
        <div class="col-md-12 col-sm-12 footer-widget footer-about-us">
           <div class="row">
                <div class="col-md-6">
                    <h4>Email:</h4>
                    <p>{{$data->email}}</p>
                </div>
                <div class="col-md-6">
                    <h4>Phone No.</h4>
                    <p>{{$data->telephone}}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div><!--/ container end -->
</section><!--/ Main container end -->
</div>
</div>
</div>
</div>
<script>
    function httpGet(theUrl)
    {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", theUrl, false );
        xmlHttp.send( null );
        return JSON.parse(xmlHttp.responseText);
    }
    setTimeout(() => {
        httpGet("plusview/{{$data->id}}");
    }, 60*500);
</script>
 @endsection
 @section('css')
 <style>
    p > img{
        width: 100%;
    }
 </style>
 @endsection
