@extends('ad.layout.index')
@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <br id="ghim">
        <h3>Ghi bài viết</h3>
        <form id="tag2" target="view_home" action="ad/setting/tag2" method="POST"  style="border: 1px solid #aaa; padding: 10px;border-radius: 3px" enctype='multipart/form-data'>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
            @for ($i = 1; $i < 4; $i++)
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h4>Dữ Liệu {{$i}}</h4>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Biểu Tượng</label>
                                    <div class="col-12 ">
                                        <div class="img-6-9">
                                            <img id="loadimg{{$i}}" style="width: 100%" src="assets_pages/images/img/{{$data['tag2_'.$i.'_icon']}}" alt="">
                                        </div>
                                        <input name="{{'tag2_'.$i.'_icon'}}" onchange="loadimg(loadimg{{$i}},this)" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Tiêu Đề</label>
                                    <div class="col-12 ">
                                        <input name="{{'tag2_'.$i.'_title'}}" type="text" class="form-control font-weight-bold" value="{{$data['tag2_'.$i.'_title']}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Nội Dung</label>
                                    <div class="col-12">
                                        <input name="{{'tag2_'.$i.'_ct'}}" type="text" class="form-control" value="{{$data['tag2_'.$i.'_ct']}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            <!-- end col -->
            <div class="container">
                <button type="submit" data-toggle="modal" data-target=".view_home_demo" style="font-size: 1.5em" class="font-weight-bold text-uppercase float-right btn btn-primary">
                    <i class="fas fa-save"></i> LƯU THAY ĐỔI
                </button>
            </div>
        </div>
        </form>
        <br id="danhmuc1">
        <h3>DANH MỤC THỨ 1</h3>
<form id="tag1" target="view_home" action="ad/setting/tag1" method="POST" style="border: 1px solid #aaa; padding: 10px;border-radius: 3px">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Tên Danh Mục</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="tag1" class="form-control text-uppercase font-weight-bold" value="{{$data['tag1']}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @for ($i = 1; $i < 4; $i++)
            <div class="col-12 col-sm-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h4>Dữ Liệu thứ {{$i}}</h4>
                                <div class="form-group row">
                                    <label class="col-6 col-form-label">Biểu Tượng</label>
                                    <div class="col-6">
                                        <button style="font-size: 1.3em" onclick="resource_value(icon_sele{{$i}},{{'tag1_'.$i.'_icon'}})" type="button" data-toggle="modal" data-target="#mess" class="w-100 btn btn-icon waves-effect waves-light btn-primary"> 
                                        <i id="icon_sele{{$i}}" class="{{$data['tag1_'.$i.'_icon']}}"></i> </button>
                                        <input id="{{'tag1_'.$i.'_icon'}}" type="hidden" name="{{'tag1_'.$i.'_icon'}}" value="{{$data['tag1_'.$i.'_icon']}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Tiêu Đề</label>
                                    <div class="col-12 ">
                                        <input type="text" name="{{'tag1_'.$i.'_title'}}" class="form-control font-weight-bold" value="{{$data['tag1_'.$i.'_title']}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Nội Dung</label>
                                    <div class="col-12">
                                        <input type="text" name="{{'tag1_'.$i.'_ct'}}" class="form-control" value="{{$data['tag1_'.$i.'_ct']}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            <div class="container">
                <button type="submit" data-toggle="modal" data-target=".view_home_demo" style="font-size: 1.5em" class="font-weight-bold text-uppercase float-right btn btn-primary">
                    <i class="fas fa-save"></i> LƯU THAY ĐỔI
                </button>
            </div>
            <!-- end col -->
        </div>
</form>
<br id="danhmuc2">

<h3>DANH MỤC THỨ 2</h3>
<form id="tag2" target="view_home" action="ad/setting/tag2" method="POST"  style="border: 1px solid #aaa; padding: 10px;border-radius: 3px" enctype='multipart/form-data'>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Tên Danh Mục</label>
                            <div class="col-lg-10">
                                <input name="tag2" type="text" class="form-control text-uppercase font-weight-bold" value="{{$data['tag2']}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    @for ($i = 1; $i < 5; $i++)
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h4>Dữ Liệu {{$i}}</h4>
                        <div class="form-group row">
                            <label class="col-8 col-form-label">Biểu Tượng</label>
                            <div class="col-12 ">
                                <div class="img-6-9">
                                    <img id="loadimg{{$i}}" style="width: 100%" src="assets_pages/images/img/{{$data['tag2_'.$i.'_icon']}}" alt="">
                                </div>
                                <input name="{{'tag2_'.$i.'_icon'}}" onchange="loadimg(loadimg{{$i}},this)" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-8 col-form-label">Tiêu Đề</label>
                            <div class="col-12 ">
                                <input name="{{'tag2_'.$i.'_title'}}" type="text" class="form-control font-weight-bold" value="{{$data['tag2_'.$i.'_title']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-8 col-form-label">Nội Dung</label>
                            <div class="col-12">
                                <input name="{{'tag2_'.$i.'_ct'}}" type="text" class="form-control" value="{{$data['tag2_'.$i.'_ct']}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor
    <!-- end col -->
    <div class="container">
        <button type="submit" data-toggle="modal" data-target=".view_home_demo" style="font-size: 1.5em" class="font-weight-bold text-uppercase float-right btn btn-primary">
            <i class="fas fa-save"></i> LƯU THAY ĐỔI
        </button>
    </div>
</div>
</form>

<br id="thanhtuu">
<h3>THÀNH TỰU</h3>
<form id="tag2" target="view_home" action="ad/setting/tag3" method="POST"  style="border: 1px solid #aaa; padding: 10px;border-radius: 3px" enctype='multipart/form-data'>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
    @for ($i = 1; $i < 5; $i++)
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h4>Thành Tựu {{$i}}</h4>
                        <div class="form-group row">
                            <label class="col-6 col-form-label">Biểu Tượng</label>
                            <div class="col-6">
                                <button style="font-size: 1.3em" onclick="resource_value(icon_sele_{{$i}},{{'sl_'.$i.'_icon'}})" type="button" data-toggle="modal" data-target="#mess" class="w-100 btn btn-icon waves-effect waves-light btn-primary"> 
                                <i id="icon_sele_{{$i}}" class="{{$data['sl_'.$i.'_icon']}}"></i> </button>
                                <input id="{{'sl_'.$i.'_icon'}}" type="hidden" name="{{'sl_'.$i.'_icon'}}" value="{{$data['sl_'.$i.'_icon']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-8 col-form-label">Tiêu Đề</label>
                            <div class="col-12 ">
                                <input type="text" name="{{'sl_'.$i.'_ten'}}" class="form-control font-weight-bold" value="{{$data['sl_'.$i.'_ten']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-8 col-form-label">Thành Tựu</label>
                            <div class="col-12 ">
                                <input type="number" data-bind="value:replyNumber"  name="{{'sl_'.$i}}" class="form-control" value="{{$data['sl_'.$i]}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor
    <!-- end col -->
    <div class="container">
        <button type="submit" data-toggle="modal" data-target=".view_home_demo" style="font-size: 1.5em" class="font-weight-bold text-uppercase float-right btn btn-primary">
            <i class="fas fa-save"></i> LƯU THAY ĐỔI
        </button>
    </div>
</div>
</form>
<br id="gioithieu">
<h3>Giới thiệu công ty</h3>
<form id="tag2" target="view_home" action="ad/setting/tag4" method="POST"  style="border: 1px solid #aaa; padding: 10px;border-radius: 3px" enctype='multipart/form-data'>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
        <div class="col-12">
            <h4>Dữ Liệu {{$i}}</h4>
            <div class="form-group row">
                <label class="col-8 col-form-label">Tiêu Đề Giới Thiệu</label>
                <div class="col-12 ">
                    <input type="text"  name="gt_title" class="form-control" value="{{$data['gt_title']}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-8 col-form-label">Hình ảnh đại diện</label>
                <div class="col-lg-6">
                    <div class="img-6-9">
                        <img id="img_bg" style="width: 100%" src="assets_pages/images/{{$data['gt_icon']}}" alt="">
                    </div>
                    <input name="gt_icon" onchange="loadimg(img_bg,this)" type="file" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-8 col-form-label">Nội dung</label>
                <div class="col-12">
                    <textarea id="gt_ct" name="gt_ct">
                       {!!$data["gt_ct"]!!}
                    </textarea>
                </div>
            </div>
           
        </div>
    <div class="container">
        <button type="submit" data-toggle="modal" data-target=".view_home_demo" style="font-size: 1.5em" class="font-weight-bold text-uppercase float-right btn btn-primary">
            <i class="fas fa-save"></i> LƯU THAY ĐỔI
        </button>
    </div>
</div>
</form>


</div>
    <!-- end container-fluid -->

</div>
@include('ad.layout.select_icon')
<script>
    function loadimg(img,f)
    {
        var fr = new FileReader();
        fr.onload = function () {
            img.src = fr.result;
        }
        fr.readAsDataURL(f.files[0]);
        console.log("Đã Thực hiện");
    }
</script>
<div class="modal fade view_home_demo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content embed-responsive" style="height: 90vh">
        <iframe name="view_home"></iframe>
    </div>
    </div>
</div>
@endsection
@section('css')
<link href="assets\libs\summernote\summernote-bs4.css" rel="stylesheet" type="text/css">
@endsection
@section('js')
<script src="ckeditor.js"></script>
<script>
    CKEDITOR.replace('gt_ct',{
    extraAllowedContent : 'img(*){*}[*]'
    });
</script>
<style>
    #cke_76,#cke_77{
        display: none;
    }
</style>
@endsection
