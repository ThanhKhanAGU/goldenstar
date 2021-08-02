@extends('ad.layout.index')
@section('content')
<h4 class="header-title mb-4">Thay đổi thông tin liên hệ</h4>

<form  target="view_demo" action="ad/set/com" method="POST" class="parsley-examples" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="type" value="ps">
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Địa Chỉ
        </label>
        <div class="col-lg-10">
            <input name="dc" id="dc" 
            data-parsley-length="[5,255]" 
            placeholder="Địa chỉ công ty..."
            value=""
            type="text" class="form-control" required="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Email
        </label>
        <div class="col-lg-10">
            <input name="mail" id="mail" 
            data-parsley-length="[5,255]" 
            placeholder="Email công ty..."
            value=""
            type="text" class="form-control" required="">
        </div>
    </div><div class="form-group row">
        <label class="col-lg-2 col-form-label">
            SĐT
        </label>
        <div class="col-lg-10">
            <input name="sdt" id="sdt"
            data-parsley-length="[5,255]" 
            placeholder="Số điện thoại công ty..."
            value=""
            type="text" class="form-control" required="">
        </div>
    </div>
<!-- end Action  -->
    <div class="form-group mb-0">
        <div>
            <button data-toggle="modal" data-target="#view_page" type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                Lưu Thay đổi
            </button>
        </div>
    </div>
</form>
<div id="view_page" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-body embed-responsive " style="height: 90vh">
            <iframe name="view_demo" class="embed-responsive-item" src="" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
  <script>
@endsection
@section('js')
<script src="assets/libs/ckeditor/ckeditor.js"></script>
<script>
    function imgs()
    {
        var view = document.getElementById("viewimg_2");
        var input = document.getElementById("img");
        view.innerHTML = "";
        for (let i = 0; i < input.files.length; i++) {
            view.innerHTML +=`<img height="75px" class="img_view_item" width="100px" src="" alt="">`;   
        }
        var img = document.getElementsByClassName("img_view_item");

        for (let i = 0; i < input.files.length; i++) {
            let fr = new FileReader();
            fr.onload = function () {
                img[i].src = fr.result;
            }
            fr.readAsDataURL(input.files[i]);
        }     
    }
    function loadimg()
    {
        var f = document.getElementById('image');
        var img = document.getElementById('viewimg-img')
        var fr = new FileReader();
        fr.onload = function () {
            img.src = fr.result;
        }
        fr.readAsDataURL(f.files[0]);
        size();
    }
    CKEDITOR.replace('content',{
        filebrowserImageUploadUrl: "{{url('uploads-cheditor?_token='.csrf_token()) }}",
        filebrowserUploadMethod: "form",
        filebrowserBrowseUrl:"{{url('file-cheditor?_token='.csrf_token()) }}"
    });
    function size()
    {
        var mapElement = document.getElementsByClassName("img-6-9");
        for(i=0;i<mapElement.length;i++)
        {
            mapElement[i].style.height = mapElement[i].offsetWidth*6/9+"px";
        
        }
        var mapElement = document.getElementsByClassName("img-3-9");
        for(i=0;i<mapElement.length;i++)
        {
            mapElement[i].style.height = mapElement[i].offsetWidth*4/9+"px";
        
        }
    }
    window.addEventListener("resize",size);
    size();

</script>
<script src="assets\libs\switchery\switchery.min.js"></script>
<script src="assets\js\pages\form-advanced.init.js"></script>
@endsection
@section('css')
<style>
    .img-6-9 img,.img-3-9 img{
    width: 100%;
    background-size: cover; 
    overflow: hidden;
    }
    .img-6-9,.img-3-9{
        overflow: hidden;
        border-radius: 3px;
    }
    #viewimg_2 img{
       margin: 3px;
       border-radius:5px;
       box-shadow: 2px 3px 5px #333;  
    }

</style>   
<link href="assets\libs\switchery\switchery.min.css" rel="stylesheet" type="text/css">
@endsection