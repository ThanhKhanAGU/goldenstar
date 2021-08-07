{{-- Kế Thừa dữ Liệu --}}
@extends('pages.layout.main')
@section('title')
    Danh Sách Tin Tức
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
            <!-- Blog start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-none d-sm-block">
                <!-- Features start -->
                <div class="row post hidden-xs">   
                    <h4> <i class="fa fa-th-list"></i> Bài Viết Mới Nhất<span class="title-desc"></span></h4>
                    <?php $dem = 0; ?>
                    @foreach ($moi as $item)
                    <?php $dem += 3; ?>
                    <a href="page/{{$item->id}}/{{\App\Http\Controllers\Controller::changeTitle($item->name,0,100)}}.html">
                        <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".{{$dem}}s">
                            <div class="service-image card-img" >
                                <div class="img-6-9" >
                                    <img src="post/{{$item->image}}" alt="{{$item->image}}" />
                                </div>
                                <h5 style="height: 3em; overflow: hidden;" class="font-weight-bold">{{$item->name}}</h5>
                                <p style="color:gray; height: 5em; overflow: hidden; text-overflow: ellipsis;">{{$item->summary}}</p>
                                <p class="post-meta text-right">
                                    <span class="post-meta-date">
                                        <i class="fa fa-clock-o"></i> {{$item->created_at}}
                                        <i class="fa fa-eye"></i> {{$item->view}}
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
                <h3 class="widget-title"><i class="fa fa-star" aria-hidden="true"></i> Bài Viết Nổi Bật</h3>  
                <hr>
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
            </div>
            </div><!--/ row end -->
            <h4> <i class="fa fa-th-list"></i>Bài Viết <span class="title-desc"></span></h4>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="card col-md-9">
                        @foreach ($tintuc as $tt)
                        <a class="product" href="page/{{$tt->id}}/{{\App\Http\Controllers\Controller::changeTitle($tt->name,0,100)}}.html">
                            <div class="row g-0 card-w card-img">
                                <div class="col-md-4 col-sm-5 col-xs-5">
                                    <div style="width: 90%; height: 90%; margin: 5%" class="img-6-9">
                                        <img src="post/{{$tt->image}}">
                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div>
                                        <h5  style="height: 3em;overflow: hidden;" class="font-weight-bold">{{$tt->name}}</h5>
                                        <p  style="height: 3.5em;overflow: hidden;color: gray" style="color:gray; height: 3em; overflow: hidden; text-overflow: ellipsis;" >
                                            {{$tt->summary}}
                                        </p>
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
                        <div class="row">

                        </div>
                    </div><!--/ Content row end -->   
                      
                </div>   
                <div class="row">
                    <nav aria-label="Page navigation example">
                        <div id="view_pagi" class="pagination">
                        </div>
                      </nav>
                </div>              
            </div>
    </div><!--/ container end -->
</section><!-- Blog details page end --> 
@endsection
@section('css')
<style>
    .p{
        display: none;
    }
    .page-item
    {
        width: 30px;
        height: 30px;
        line-height: 30px;
        border: 1px solid orangered;
        display: inline-block;
        text-align: center;
        margin: 0px;
        cursor: pointer;
        transition: 100ms all linear
    }
    .page-item.active
    {
        color: white;
        background: orangered;
    }
    .page-item:hover{
        color: white;
        background: orangered;
    }
</style>
@endsection
@section('js')
<script>
    function pary(page_select)
    {
    var a = document.getElementsByClassName("product");
    var b =[];
    for (let i = 0; i < a.length; i++) {
        if(!a[i].classList.contains("fill"))
        {
            b.push(a[i])
            
        }   
    }
    let sl_page = parseInt(b.length/4) + ((b.length%4>0)?1:0);
    let view_pagi = document.getElementById("view_pagi");
    view_pagi.innerHTML = "Trang:";
    for (let i = 0; i < sl_page; i++) {
        view_pagi.innerHTML+=`
        <div onclick="pary(${i+1})" class="page-item ${(i==(page_select-1))?'active':''}">${i+1}</div>`
    }

    for (let i = 0; i < b.length; i++) {
        
        if(4*(page_select-1)<=i&&i<4*(page_select))
        {
            b[i].classList.remove("p")
        }else
        {
            b[i].classList.add("p")
        }

    }
    size();
    }
    pary(1)
</script>
@endsection