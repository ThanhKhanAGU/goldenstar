@extends('pages.layout.main')
@section('content')
<div class="baiviet">
    <div class="background img-3-9">
        <img src="post/{{$data->HinhAnh}}" alt="">
        <span class="filter"></span>
    </div>
    <div class="text-center">
        <h2>{!!$data->TieuDe!!}</h2>
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
                <p><b>{!!$data->TomTat!!}</b></p>
                <br/>
                {!!$data->NoiDung!!}
            </div><!--/ post content end -->
            <p class="text-right">
                <i class="fa fa-eye" aria-hidden="true"></i>
                {{$data->SoLuotXem}} lượt xem
            </p>
            <br>
            <h3 class="widget-title">Bình Luận</h3>
            <hr>
            <div id="comment_cotext" class="comment">
                @foreach ($data->comment as $cmt)
                   <div class="comment-item">
                       <div class="avata">
                           <i class="fa fa-user" aria-hidden="true"></i>
                       </div>
                       <div class="cmt">
                           <div class="name">
                               {{$cmt->TenNguoiXem}}
                           </div>
                           <div class="time">
                               {{$cmt->created_at}}
                           </div>
                           <div class="ct">
                               {{$cmt->NoiDung}}
                           </div>
                       </div>
                   </div>
                @endforeach
           
            </div>
            <hr>
            <div class="create-comment">
                <form action="comment" id=comment-form method="POST">
                    <label for="name">Tên:</label>
                    <input type="text" name="name" id="name" placeholder="Họ tên ... ">
                    <label for="cmt">Nội dung</label>
                    <textarea id="cmt" name="cmt" cols="40" rows="5" placeholder="Nội dung bình luận" ></textarea>
                    <button type="button" id="getcmt" onclick="send()">Gửi comment</button>
                    <script>

                        function send()
                        {
                            var name = document.getElementById('name').value;
                            var cmt = document.getElementById('cmt').value;
                            var token = "{{csrf_token()}}";
                            var id = '{{$data->id}}'
                            $.ajax({
                                url:"{{asset('/comment')}}",
                                method:"POST",
                                data:{
                                    name:name,
                                    cmt:cmt,
                                    _token:token,
                                    id: id
                                },
                                success:function(data)
                                {
                                    var cmt = httpGet('get-comment/{{$data->id}}')
                                    var cmt_s = ""
                                    for(i = 0; i < cmt.length;i++)
                                    {
                                        cmt_s +=
                                        `<div class="comment-item">
                                            <div class="avata">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                            <div class="cmt">
                                                <div class="name">
                                                    ${cmt[i].TenNguoiXem}
                                                </div>
                                                <div class="time">
                                                    ${cmt[i].created_at}
                                                </div>
                                                <div class="ct">
                                                    ${cmt[i].NoiDung}
                                                </div>
                                            </div>
                                        </div>`;
                                    }
                                    $('#comment_cotext').html(cmt_s)
                                    document.getElementById("cmt").value=""
                                }
                            })
                            
                        }
                        function httpGet(theUrl)
                        {
                            var xmlHttp = new XMLHttpRequest();
                            xmlHttp.open( "GET", theUrl, false );
                            xmlHttp.send( null );
                            return JSON.parse(xmlHttp.responseText);
                        }
                        setTimeout(() => {
                            httpGet("updateluotxem{{$data->id}}");
                        }, 60*1000);

                    </script>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="sidebar sidebar-right">
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
                <br>
                <h3 class="widget-title">Bài Viết Mới Nhất</h3>  
                <div class="container">
                    <div class="row card mb-3">
                        @foreach ($moi as $tt)
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
                
            </div><!--/ Sidebar end -->
        </div><!--/ Sidebar col end -->
    </div><!--/ row end -->
</div><!--/ container end -->
</section><!--/ Main container end -->
</div>
</div>
</div>
</div>

 @endsection
