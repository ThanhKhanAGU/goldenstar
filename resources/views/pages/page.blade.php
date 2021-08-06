@extends('pages.layout.main')
@section('title')
    {{$data->name}}
@endsection
@section('content')
<div class="baiviet">
    <div class="background img-3-9">
        <img src="post/{{$data->image}}" alt="">
        <span class="filter"></span>
    </div>
    <div class="text-center">
        <h2>{!!$data->name!!}</h2>
        <p class="breadcrumb" style="color">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            {{$data->created_at}}
        </p>
    </div>
<section id="main-container">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
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
        <div class="col-lg-4 col-md-4">
            <div class="sidebar sidebar-right">
                <h3 class="widget-title">Bài Viết Nổi Bật</h3>  
                <div class="container">
                    <div class="row card mb-3">
                        @foreach ($noibat as $tt)
                        <a href="page/{{$tt->id}}/{{\App\Http\Controllers\Controller::changeTitle($tt->name,0,100)}}.html">
                            <div class="row g-0 card-w card-img">
                                <div class="col-md-4 col-sm-5 col-xs-5">
                                    <div style="width: 90%; height: 90%; margin: 5%" class="img-6-9">
                                        <img src="post/{{$tt->image}}">
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div>
                                        <h5 style="height: 3em;overflow: hidden;" class=" font-weight-bold">{{$tt->name}}</h5>
                                        <p style="height: 3.5em;overflow: hidden; color:gray" class=" hidden-md  hidden-lg">{{$tt->summary}}</p>
                                        <p class="post-meta">
                                            <span class="post-meta-date">
                                                <i class="fa fa-clock-o"></i> {{$tt->created_at}}
                                                <i class="fa fa-eye"></i> {{$tt->view}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div><!--/ Content row end -->
                </div>
                <br>
                <h3 class="widget-title">Bài Viết Mới Nhất</h3>  
                <div class="container">
                    <div class="row card mb-3">
                        @foreach ($moi as $tt)
                        <a href="page/{{$tt->id}}/{{\App\Http\Controllers\Controller::changeTitle($tt->name,0,100)}}.html">
                            <div class="row g-0 card-w card-img">
                                <div class="col-md-4 col-sm-5 col-xs-5">
                                    <div style="width: 90%; height: 90%; margin: 5%" class="img-6-9">
                                        <img src="post/{{$tt->image}}">
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div>
                                        <h5 style="height: 3em;overflow: hidden;" class="font-weight-bold">{{$tt->name}}</h5>
                                        <p class="post-meta">
                                            <span class="post-meta-date">
                                                <i class="fa fa-clock-o"></i> {{$tt->created_at}}
                                                <i class="fa fa-eye"></i> {{$tt->view}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div><!--/ Content row end -->
                </div>
                
            </div><!--/ Sidebar end -->
        </div><!--/ Sidebar col end -->
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
