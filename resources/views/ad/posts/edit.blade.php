{{-- @extends('ad.layout.index')
@section('content')

  <!-- Start Content-->
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Sửa tin tức</h4>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
<form action="ad/tintuc/edit/{{$tintuc->id}}" class="form-horizontal" enctype='multipart/form-data' method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">Tiêu đề</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" id="TieuDe" name="TieuDe" placeholder="Tiêu đề bài viết ..."
            value="{{$tintuc->TieuDe}}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="TomTat">Tóm tắt</label>
        <div class="col-lg-10">
            <input type="text" id="TomTat" name="TomTat" class="form-control" placeholder="Nội dung tóm tắt ..."
            value="{{$tintuc->TomTat}}">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="example-fileinput">Hình ảnh</label>
        <div class="col-lg-10">
            <input onchange="loadimg()" type="file" name="HinhAnh" id="HinhAnh" class="form-control">        
            <div class="col-lg-8" style="margin-top: 3px; border: 1px solid #ccc; border-radius: 3px; padding: 5px">
                <div  id="viewimg" class=" img-3-9" style="padding: 0; border-radius: 3px">
                    <img id="viewimg-img" src="post/{{$tintuc->HinhAnh}}" >
                </div>
            </div>
        </div>
        <script>
            function loadimg()
            {
                var f = document.getElementById('HinhAnh');
                var img = document.getElementById('viewimg-img')
                var fr = new FileReader();
                fr.onload = function () {
                    img.src = fr.result;
                }
                fr.readAsDataURL(f.files[0]);
                size();
            }
        </script>
    </div> 

    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-4">Nội dung</h4>
            <textarea name="data_post" id="data" placeholder="Nội dung bài viết" value="">
                {!!$tintuc->NoiDung!!}
            </textarea>

        </div>
    </div>


    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="example-fileinput">Nổi bật</label>
        <div class="col-lg-10 switchery-demo">
            <input id="noibat" type="hidden" name="noibat" value="test">
        
            <input id="noibat_ckb" type="checkbox"
            @if ($tintuc->NoiBat)
                checked="checked"
            @endif
            data-plugin="switchery" data-color="#1bb99a" data-size="small">
        </div>
    </div>

    <!-- end card-->
    <div class="button-list">
    <button type="submit" onclick="loadhidden()" class="btn btn-primary waves-effect width-md waves-light">Lưu Thay đổi</button>
    <a href="ad/tintuc/list"><button type="button" class="btn btn-danger waves-effect width-md waves-light">Hủy</button></a>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('js')
    <script src="ckeditor.js"></script>
    <script>
        CKEDITOR.replace('data',{
            filebrowserImageUploadUrl: "{{url('uploads-cheditor?_token='.csrf_token()) }}",
            filebrowserUploadMethod: "form",
            filebrowserBrowseUrl:"{{url('file-cheditor?_token='.csrf_token()) }}"
        });
        function loadhidden()
        {       
            if(document.getElementById("noibat_ckb").checked)
                document.getElementById("noibat").value = 1;
            else
                document.getElementById("noibat").value = 0;
        }
        
    </script>
    <script src="assets\js\vendor.min.js"></script>
    <script src="assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.min.js"></script>
    <script src="assets\libs\switchery\switchery.min.js"></script>
    <script src="assets\libs\select2\select2.min.js"></script>
    <script src="assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets\libs\jquery-mask-plugin\jquery.mask.min.js"></script>
    <script src="assets\libs\moment\moment.min.js"></script>
    <script src="assets\libs\bootstrap-timepicker\bootstrap-timepicker.min.js"></script>
    <script src="assets\libs\bootstrap-colorpicker\bootstrap-colorpicker.min.js"></script>
    <script src="assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.js"></script>
    <script src="assets\js\pages\form-advanced.init.js"></script>
@endsection
@section('css')
    <link href="assets\libs\switchery\switchery.min.css" rel="stylesheet" type="text/css">
@endsection --}}