@extends('ad.layout.index')
@section('content')

  <!-- Start Content-->
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Thêm người dùng</h4>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="header-title mb-4">Input Types</h4> --}}

                    <div class="row">
                        <div class="col-12">
                            <div class="">
                                @if(count($errors)>0)
                                        <div class="alert alert-danger" role="alert">
                                            @foreach ($errors->all() as $err)
                                                {{$err}} <br>
                                            @endforeach
                                        </div>
                                @endif
                                <form action="ad/user/add" class="form-horizontal" enctype='multipart/form-data' method="POST">
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Tên người dùng</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Some text value...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Email</label>
                                        <div class="col-lg-10">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Quyền</label>

                                        <div class="radio radio-custom col-lg-4">
                                            <input type="radio" name="level" id="radio5" value="1" checked="">
                                            <label for="radio5">
                                                Admin
                                            </label>
                                        </div>

                                        <div class="radio radio-custom col-lg-3">
                                            <input type="radio" name="level" id="radio6" value="0">
                                            <label for="radio6">
                                                Thường
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Mật khẩu</label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Nhập lại mật khẩu</label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Nhập lại mật khẩu...">
                                        </div>
                                    </div>
                                  <div class="button-list">
                                    <button type="submit" class="btn btn-primary waves-effect width-md waves-light">Thêm người dùng</button>
                                    <a href="ad/user/list"><button type="button" class="btn btn-secondary waves-effect width-md waves-light">Cancel</button></a>
                                  </div>

                                </form>
                            </div>
                            
                          <!-- end card-box -->
                        <!-- end col -->
                
                        </div>

                    </div>
                    <!-- end row -->

                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- end container-fluid -->

    
@endsection

@section('js')


<!-- Plugins js -->
<script src="assets\libs\katex\katex.min.js"></script>
<script src="assets\libs\quill\quill.min.js"></script>

<!-- Init js-->
<script src="assets\js\pages\form-quilljs.init.js"></script>

<!-- Plugins Js -->
<script src="assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.min.js"></script>
<script src="assets\libs\switchery\switchery.min.js"></script>

<script src="assets\libs\select2\select2.min.js"></script>
<script src="assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.js"></script>
<script src="assets\libs\jquery-mask-plugin\jquery.mask.min.js"></script>
<script src="assets\libs\moment\moment.min.js"></script>
<script src="assets\libs\bootstrap-timepicker\bootstrap-timepicker.min.js"></script>
<script src="assets\libs\bootstrap-colorpicker\bootstrap-colorpicker.min.js"></script>
<script src="assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.js"></script>

<!-- Init js-->
<script src="assets\js\pages\form-advanced.init.js"></script>
    
@endsection
@section('css')

<!-- Plugins css -->
<link href="assets\libs\quill\quill.core.css" rel="stylesheet" type="text/css">
<link href="assets\libs\quill\quill.bubble.css" rel="stylesheet" type="text/css">
<link href="assets\libs\quill\quill.snow.css" rel="stylesheet" type="text/css">

<!-- Plugins css -->
<link href="assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css" rel="stylesheet">
<link href="assets\libs\switchery\switchery.min.css" rel="stylesheet" type="text/css">

<link href="assets\libs\select2\select2.min.css" rel="stylesheet" type="text/css">
<link href="assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.css" rel="stylesheet">
<link href="assets\libs\bootstrap-timepicker\bootstrap-timepicker.min.css" rel="stylesheet">
<link href="assets\libs\bootstrap-colorpicker\bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="assets\libs\bootstrap-datepicker\bootstrap-datepicker.css" rel="stylesheet">
    
@endsection