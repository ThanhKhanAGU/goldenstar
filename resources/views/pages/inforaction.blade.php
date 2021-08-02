@extends('pages.layout.main')
@section('content')
<div class="baiviet">
    <div class="background img-3-9">
        @if (count(\App\Images::where(['id_post' => $data->id])->get()))
            <img src="action/{{\App\Images::where(['id_post' => $data->id])->pluck('img')->first()}}" alt="">
        @else
            <img style="width: 100%;height: 100%;" src="action/default.jpg" alt="">
        @endif
        
        <span class="filter"></span>
    </div>
    <div class="text-center">
        <h2>{!!$data->name!!}</h2>
        <p class="breadcrumb" style="color">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            {{$data->created_at}}
        </p>
    </div>
<section id="main-container" style="padding-top: 0">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="post-content">
                <p><b>{!!$data->summary!!}</b></p>
                <br/>{!!$data->content!!}
            </div><!--/ post content end -->
            <p class="text-right">
                <i class="fa fa-eye" aria-hidden="true"></i>
                {{$data->view}} lượt xem
            </p>
            <br>
        </div>
        
    </div><!--/ row end -->
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
