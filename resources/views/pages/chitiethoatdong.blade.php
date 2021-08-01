@extends('pages.layout.main')
@section('content')
<div class="baiviet">

    <div class="background">
        <img src="post/{{$data->HinhAnh}}" alt="">
        <span class="filter"></span>
        <!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>{!!$data->TenHoatDong!!}</h2>
		        	<p class="breadcrumb" style="color">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
			           {{$data->created_at}}
                    </p>
	          	</div>
          	</div><!-- Subpage title end -->
    </div>
<section id="main-container">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <div class="post-content">
                <p><b>{!!$data->TenHoatDong!!}</b></p>
                <br/>
                {!!$data->NoiDung!!}
            </div><!--/ post content end -->
            <p class="text-right">
                <i class="fa fa-eye" aria-hidden="true"></i>
                {{$data->SoLuotXem}} lượt xem
            </p>
            <hr>
            {{-- <div class="comment">
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
                           <div class="button">
                               <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a>
                               <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>                    
                           </div>
                       </div>
                   </div>
                @endforeach --}}
           
            {{-- </div>
            <div class="create-comment">
                <form action="comment/{{$data->id}}" id=comment-form method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <label for="name">Tên:</label>
                    <input type="text" name="name" id="name" placeholder="Họ tên ... ">
                    <label for="cmt">Nội dung</label>
                    <textarea name="cmt" cols="40" rows="5" placeholder="Nọi dung bình luận ..."></textarea>
                    <button type="button" id="getcmt" onclick="getcmt()">Gửi comment</button>
                    <script>
                        function getcmt()
                        {
                            document.getElementById()
                            $.ajax({
                                url:"{{url('/comment/}}"+"{{$data->id}}",
                                method: "POST",
                                data:{}
                            })
                        }
                    </script>
                </form>
            </div> --}}
        </div>
    
    </div><!--/ row end -->
</div><!--/ container end -->
</section><!--/ Main container end -->
</div>
</div>
     </div>
 </div>
@endsection
