@extends('ad.layout.index')
@section('content')
<div class="content">
<div class="container-fluid">
    <h3>Thành Tựu</h3>
    <form id="tag2" target="view_home" action="ad/set/tag3" method="POST"  enctype='multipart/form-data'>
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
                                    <i id="icon_sele_{{$i}}" class="{{$dt['sl_'.$i.'_icon']}}"></i> </button>
                                    <input id="{{'sl_'.$i.'_icon'}}" type="hidden" name="{{'sl_'.$i.'_icon'}}" value="{{$dt['sl_'.$i.'_icon']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-8 col-form-label">Tiêu Đề</label>
                                <div class="col-12 ">
                                    <input type="text" name="{{'sl_'.$i.'_ten'}}" class="form-control font-weight-bold" value="{{$dt['sl_'.$i.'_ten']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-8 col-form-label">Thành Tựu</label>
                                <div class="col-12 ">
                                    <input type="number" data-bind="value:replyNumber"  name="{{'sl_'.$i}}" class="form-control" value="{{$dt['sl_'.$i]}}">
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
