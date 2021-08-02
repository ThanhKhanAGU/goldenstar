@extends('ad.layout.index')
@section('content')
<div class="content">
<div class="container-fluid">
    <h3>THƯƠNG HIỆU NỔI BẬT</h3>
    <form id="tag2" target="view_home" action="ad/set/tag2" method="POST"  enctype='multipart/form-data'>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tên Danh Mục</label>
                                <div class="col-lg-10 ">
                                    <input name="tag2" type="text" class="form-control text-uppercase font-weight-bold" value="{{$dt['tag2']}}">
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
                                    <div class="img-9-9">
                                        <img id="loadimg{{$i}}" style="width: 100%; height: 100%;" 
                                        src="assets_pages/images/img/{{$dt['tag2_'.$i.'_icon']}}" alt="">
                                    </div>
                                    <input name="{{'tag2_'.$i.'_icon'}}" onchange="loadimg(loadimg{{$i}},this)" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-8 col-form-label">Tiêu Đề</label>
                                <div class="col-12 ">
                                    <input name="{{'tag2_'.$i.'_title'}}" type="text" class="form-control font-weight-bold" value="{{$dt['tag2_'.$i.'_title']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-8 col-form-label">Nội Dung</label>
                                <div class="col-12">
                                    <input name="{{'tag2_'.$i.'_ct'}}" type="text" class="form-control" value="{{$dt['tag2_'.$i.'_ct']}}">
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
